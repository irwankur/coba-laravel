<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){

    	return view('blog', [
		    	'title' => 'Blog',
		    	// 'posts' => Post::all()
		    	'posts' => Post::latest()->get()  
	    	]
	    );

    }

    public function show(Post $post){ 

    	return view('posts', [
		    	'title' => 'Blog',
		    	'posts' => $post,
		    	'category' => $post->category
	    	]
	    );
    }
}
