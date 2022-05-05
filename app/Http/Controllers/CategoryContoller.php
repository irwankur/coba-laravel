<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryContoller extends Controller
{
    public function show(Category $category){

    	return view('category', [
		    	'title' => 'Category',
		    	'posts' => $category->posts,
		    	'category' => $category->name
	    	]
	    );
    }
}
