

@extends('layouts.main')

@section('container')
	
	@foreach($posts as $post)
		<h1>{{ $post["title"] }}</h1>
		<h5>{{ $post["author"] }}</h5>
		<p>{{ $post["body"] }}</p>
		<img src="img/{{ $post['image'] }}">
	@endforeach

@endsection
