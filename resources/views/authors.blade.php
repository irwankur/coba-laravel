


@extends('layouts.main')

@section('container')

	<h1>Post Category {{ $category }}</h1>

	@foreach($posts as $post)
	<article>
		<p>By. {{ $post->user->name }} in {{ $post->title }}</p>
		<p>{{$post->body}}</p>
	</article>
	@endforeach


	<a href="/blog">Kembali</a>

@endsection
 