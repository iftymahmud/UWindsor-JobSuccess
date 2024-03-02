<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{

    public function delete(Post $post){
        if ($post->user_id === auth()->user()->id){
            $post->delete();
            return redirect('/profile/' . auth()->user()->username)->with('Success','Post successfully deleted');
        }
        
        return "You are not authorised to delete";

    }

    public function showSinglePost(Post $post){
        $flag = 0;
        if ($post->user_id === auth()->user()->id){
            $flag=1;
        }

        return view('singlePost', ['post' => $post, 'flag'=>$flag]);
    }

    public function storeNewPost(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = Post::create($incomingFields);

        return redirect("/post/{$newPost->id}")->with('success', 'New post successfully created');
    }

    public function showCreateForm(){
        return view('createPost');
    }
}
