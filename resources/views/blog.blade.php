

@extends('layouts.main')

@section('container')
	 
	@foreach($posts as $post)
		<article class="mb-5 border-bottom">
			<h1>
				<a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
			</h1>
			<p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
			<p>{{ $post->excerpt }}</p>

			<a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more ...</a>
		</article>
	@endforeach

@endsection
