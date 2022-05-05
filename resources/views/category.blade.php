
@extends('layouts.main')

@section('container')

	<h1>{{ $category }}</h1>


	@foreach($posts as $post)
	@dd($post)
	<article>
		<p>By. Irwan Kurniawan in {{ $post->name }}</p>
		<p></p>
	</article>
	@endforeach


	<a href="/blog">Kembali</a>

@endsection
