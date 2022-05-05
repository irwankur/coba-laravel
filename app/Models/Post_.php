<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

	private static $posts = [
		[
    	'title' => 'Halaman Blog',
    	'author' => 'irwan', 
    	'slug' => 'slug-pertama',
    	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    	'image' => 'irwan.jpg'
    	],
    	[
    	'title' => 'Halaman Blog 2',
    	'author' => 'kurniawan', 
    	'slug' => 'slug-kedua',
    	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    	'image' => 'irwan.jpg'
    	]
	];

	public static function alls()
	{
		return collect(self::$posts);
	}

	public static function finds($slug)
	{
		// $posts = self::$posts;
		// $post = [];
		// foreach($posts as $p){
		// 	if($p["slug"] === $slug){
		// 		$post = $p;
		// 	}
		// }

		$posts = static::alls();

		return $posts->firstWhere('slug', $slug);

	}

}
