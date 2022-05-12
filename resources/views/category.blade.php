


@extends('layouts.main')

@section('container')

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<h1>{{ $title }}</h1>

				@foreach($posts as $post)
				<article class="mb-4">
					<p>By. {{ $post->user->name }} in {{ $post->title }}</p>
					<p>{{$post->body}}</p>
				</article>
				<hr>
				@endforeach
				
			</div>
		</div>
	</div>



	


	<a href="/blog">Kembali</a>

@endsection
 