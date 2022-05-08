
@extends('layouts.main')

@section('container')

	<article>
		<h1>{{ $posts["title"] }}</h1>

		<p>By. {{ $posts->user->name }} in {{ $posts->category->name }}</p>

		<p>{{ $posts["body"] }}</p>
		<img src="/img/{{ $posts['image'] }}"> 
	</article>

	<a href="/blog">Kembali</a>

@endsection
