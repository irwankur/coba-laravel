


@extends('layouts.main')

@section('container')

	<h1>Post Category {{ $category }}</h1>

	@foreach($posts as $post)
	<article>
		<p>By. Irwan Kurniawan in {{ $post->title }}</p>
		<p></p>
	</article>
	@endforeach


	<a href="/blog">Kembali</a>

@endsection
