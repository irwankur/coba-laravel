
@extends('layouts.main')

@section('container')

	<article>
		<h1>{{ $posts["title"] }}</h1>

		<p>By. Irwan Kurniawan in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

		<p>{{ $posts["body"] }}</p>
		<img src="/img/{{ $posts['image'] }}"> 
	</article>

	<a href="/blog">Kembali</a>

@endsection
