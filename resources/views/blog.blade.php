

@extends('layouts.main')

@section('container')
	
	@foreach($posts as $post)
		<h1>
			<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
		</h1>
		<p>By. Irwan Kurniawan in <a href="/categories"></a></p>
		<p>{{ $post->excerpt }}</p>
	@endforeach

@endsection
