<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('home', ['nama' => 'irwan', 'title' => 'Home' ]);
});

Route::get('/about', function () {
    $posts = [
			[
	    	'title' => 'About Blog',
	    	'author' => 'irwan', 
	    	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	    	'image' => 'irwan.jpg'
	    	],
	    	[
	    	'title' => 'About Blog 2',
	    	'author' => 'kurniawan', 
	    	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	    	'image' => 'irwan.jpg'
	    	]
    	];


    return view('about', [
	    	'title' => 'About',
	    	'posts' => $posts
    	]
    );
});

Route::get('/blog', function () {

    return view('blog', [
	    	'title' => 'Blog',
	    	'posts' => Post::alls()  
    	]
    );
});