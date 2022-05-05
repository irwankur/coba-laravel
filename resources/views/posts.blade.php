
@extends('layouts.main')

@section('container')

	<article>
		<h1>{{ $posts["title"] }}</h1>
		<p>{{ $posts["body"] }}</p>
	</article>

	<a href="/blog">Kembali</a>

@endsection
