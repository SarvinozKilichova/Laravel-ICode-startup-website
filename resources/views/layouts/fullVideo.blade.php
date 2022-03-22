@extends('layouts.site')
@section('content')

@if(isset($video))

		<div class="container w3-animate-zoom mt-5">
		<video width="100%" height="auto" controls >
			<source src=" {{ route('getVideo', ['id'=>$video->id]) }}" >
		</video>
		<h1 class="text-dark mt-3 text-center w3-animate-zoom"> {!! $video->name !!}</h1>


		<div class=" p-4 text-justify text-muted bg-white shadow-lg">
			<p >{!! $video['text'] !!}</p>
		</div>
	</div>

@endif
@endsection
