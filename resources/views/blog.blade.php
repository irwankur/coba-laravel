

@extends('layouts.main')

@section('container')
	
<?php  
	
// 	Unsplash\HttpClient::init([
// 		'applicationId'	=> '6bacSAlEVf5AXehLGziGQzR3HK_4RJQVDTn3eFqs6GI',
// 		'secret'	=> '3xU9oEk3rbM2KL0pj2miVezvB3pVzYsgI4snTWuX7dQ',
// 		'callbackUrl'	=> 'http://localhost:8000/blog',
// 		'utmSource' => 'learning'
// 	]);

// 	// Returns the http response body.
// $twoRandomPhotosOfSomePeoples = Unsplash::randomPhoto()
//     ->orientation('portrait')
//     ->term('people')
//     ->count(2)
//     ->toJson();

// $photos = Unsplash::photos()->toJson();

?>



	<h1 class="mb-3 text-center">{{ $title }}</h1>

	<div class="row justify-content-center mb-3">
		<div class="col-md-6">
			<form action="/blog">
				
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search.."  name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
				  <div class="input-group-append">
				    <button type="submit" class="btn btn-danger" type="button" id="button-addon2">Search</button>
				  </div>
				</div>

			</form>
		</div>
	</div>



	@if($posts->count())

	<div class="card mb-3">
	  <img src="/img/1.jpg" style="height: 400px" class="card-img-top" alt="...">
	  <div class="card-body text-center">
	    <h5 class="card-title">
	    	<a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
	    </h5>


	    <p>
	    	<small class="text-muted">
		    	By. <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
	    	</small>
	    </p>

	    <p class="card-text">{{ $posts[0]->excerpt }}</p>

	    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more ...</a>
	    
	  </div>
	</div>

	
	<div class="container">
		<div class="row">

			@foreach($posts->skip(1) as $post)
			<div class="col-md-4">
				<div class="card mb-2" style="width: 18rem;">

					<div class="position-absolute bg-dark px-3 py-2 text-white">
						<a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
					</div>

				  	<img src="/img/1.jpg" class="card-img-top" alt="tes">
				  	<div class="card-body">
				    	<h5 class="card-title">
				    		<a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
				    	</h5>

				    	<p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</p>

				    	<p class="card-text">{{ $post->excerpt }}</p>

					    <a href="/posts/{{ $post->slug }}"  class="btn btn-primary text-decoration-none">read more ...</a>

					 </div>
				</div>
			</div>
			@endforeach


		</div>
	</div>

	@else

	<p class="text-center fs-4">No. post found.</p>

	@endif

@endsection
