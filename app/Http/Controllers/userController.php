<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{

    public function profile(User $profile){
        return view('profilePosts',['user' => $profile, 'username' => $profile->username, 'posts' => $profile->posts()->latest()->get(), 'postCount' => $profile->posts()->count()]);
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success','You are now logged out');
    }

    public function showCorrectHome(){
        if(auth()->check()){
            $posts = Post::with('userForeign')->latest()->get(); // Existing logic
    
            // New logic to get top 3 students with most stars
            $topStudents = User::withCount(['starsReceived' => function ($query) {
                $query->distinct('comment_id');
            }])->orderByDesc('stars_received_count')->take(3)->get();
    
            $topPosters = User::withCount('posts')
                          ->orderByDesc('posts_count')
                          ->take(3)
                          ->get();

            return view('homefeed', ['posts' => $posts, 'topStudents' => $topStudents, 'topPosters' => $topPosters]);
        } else {
            return view('home');
        }
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['username' => $incomingFields['loginusername'], 'password' => $incomingFields['loginpassword']])){
            $request->session()->regenerate();
            return redirect('/')->with('success','You have successfully logged in');
        }else{
            return redirect('/')->with('failure','Invalid username/password');
        }
    }



    public function register(Request $request){
        $incomingFields = $request->validate([
            'username' => ['required','min:4','max:20', Rule::unique('users','username')],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => ['required','min:8', 'confirmed']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);
        return redirect('/')->with('success','You have successfully created an account');
    }
}
