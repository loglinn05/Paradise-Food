@extends('layouts.layout')

@section('title', 'Cart')

@section('content')
<div class = 'card mt-1' style = 'display: inline-block; width: 300px; text-transform: capitalize;'>
	<div class = 'view overlay'>
	<img class = 'card-img-top' src = '{{ asset("resources/images/$image") }}'>
	</div>
	<div class = 'card-body light-blue accent-1'>
		<h4 class = 'card-title'>{{ $name }}</h4>
		<h5 class = 'card-title'>{{ $price }}$</h5>
	</div>
</div>
@endsection

@section('handling_scripts')
<script type = 'text/javascript' src = '{{ asset('resources/js/catalogue.js') }}'></script>
@endsection