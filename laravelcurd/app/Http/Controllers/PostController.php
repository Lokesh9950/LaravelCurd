<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
    	return view('add-post');
    }
    public function createPost(Request $request)
    {
    	$post = new Post();
    	$post->name= $request->name;
    	$post->subject= $request->subject;
    	$post->save();
    	return back()->with('post_created','Created Successful');
    }
    public function getPost()
    {
        $posts = Post::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }
    public 
}
