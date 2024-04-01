<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Star;

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
        $post->load('comments.user'); // Eager load comments and the user who made each comment
        $flag = 0;
        if ($post->user_id === auth()->user()->id){
            $flag = 1;
        }
    
        return view('singlePost', ['post' => $post, 'flag' => $flag]);
    }

    public function storeNewPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'pdf' => 'nullable|file|mimes:pdf|max:10000', // Validate the PDF
        ]);
    
        // Sanitize title and body
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
    
        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            $path = $request->file('pdf')->store('public/pdfs');
            $incomingFields['pdf_path'] = $path;
        }

        $incomingFields['url'] = $request->input('url'); // Add this line
    
        $newPost = Post::create($incomingFields);
    
        return redirect("/post/{$newPost->id}")->with('success', 'New post successfully created');
    }
    

    public function showCreateForm(){
        return view('createPost');
    }

    public function resources(){
        return view('resources');
    }









    public function storeComment(Request $request, Post $post) {
        $validatedData = $request->validate([
            'body' => 'required',
            'url' => 'nullable|url' // Validate the URL
        ]);
    
        $post->comments()->create([
            'body' => $validatedData['body'],
            'user_id' => auth()->id(),
            'url' => $validatedData['url'] // Save the URL
        ]);
    
        return back();
    }

    

    public function starComment(Comment $comment) {
        if ($comment->post->user_id !== auth()->id()) {
            return back()->with('error', 'Unauthorized action');
        }
    
        $star = Star::firstOrNew(['comment_id' => $comment->id]);
        if ($star->exists) {
            $star->delete();
        } else {
            $star->user_id = $comment->user_id;
            $star->save();
        }
    
        return back()->with('success', 'Added Star');
    }



    public function destroyComment(Comment $comment) {
        $this->authorize('delete', $comment);
    
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully.');
    }


    
}
