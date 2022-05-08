


@extends('layouts.main')

@section('container')

	<h1>{{ $title }}</h1>

	@foreach($posts as $post)
	<article class="mb-4">
		<p>By. {{ $post->user->name }} in {{ $post->title }}</p>
		<p>{{$post->body}}</p>
	</article>
	<hr>
	@endforeach


	<a href="/blog">Kembali</a>

@endsection
 