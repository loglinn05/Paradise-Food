@extends('layouts.layout')

@section('title', 'Catalogue')

@section('content')
<main>
	<div class = 'container-fluid mt-5 d-flex flex-column justify-content-center align-self-center'>
		<div class = 'row'>
			<div class = 'col-md-1'></div>
			<div class = 'col-md-10 text-center'>
				<h2 class = 'h2-reponsive text-uppercase font-weight-bold mb-0 pt-md-3 pt-3 wow fadeInDown' data-wow-delay = '0.3s'><strong>Why are people happy to contact us?</strong></h2><br>
				<h5 class = 'h5-reponsive  font-weight-bold mb-0 pt-md-2 pt-2 wow fadeInUp' data-wow-delay = '0.3s'>Because we're going to meet them, efficiently preparing and delivering the highest quality product. <br><i>Pieces of our hearts are transferred to the quality of our product.</i></h5>
				<img src = '{{ asset('resources/images/angel_with_watermelon_huge.png') }}' class = 'img-fluid rounded mx-auto d-block wow jackInTheBox slow' data-wow-delay = '0.3s'>
			</div>
			<div class = 'col-md-1'></div>
		</div>
	</div>
	<hr>
	@foreach($goods as $good)
		@foreach($good as $property => $value)
			@php
				$$property = $value;
			@endphp
		@endforeach
		<div class = 'card mt-1' style = 'display: inline-block; width: 300px; text-transform: capitalize;'>
			<div class = 'view overlay'>
			<img class = 'card-img-top' src = '{{ asset("resources/images/$image") }}'>
			</div>
			<div class = 'card-body light-blue accent-1'>
				<h4 class = 'card-title'>{{ $name }}</h4>
				<h5 class = 'card-title'>{{ $price }}$</h5>
				<button class = 'buy btn btn-primary' good-id = '{{ $id }}' good-name = '{{ $name }}' good-price = '{{ $price }}' good-image = '{{ $image }}' data-toggle = 'modal' data-target = '#bought'>BUY</button>
				<button class = 'add_to_wishes btn btn-primary' wish-id = '{{ $id }}' wish-name = '{{ $name }}' wish-price = '{{ $price }}' wish-image = '{{ $image }}' data-toggle = 'modal' data-target = '#added_to_wishes'>ADD TO WISHES</button>
			</div>
		</div>
	@endforeach
	<div class = 'modal animated zoomInDown slow' id = 'bought' tabindex = '-1' role = 'dialog' aria-labelledby = 'first_modal_label' aria-hidden = 'true'>
		<div class = 'modal-dialog' role = 'document'>
			<div class = 'modal-content cyan lighten-3'>
				<div class = 'modal-header'>
					<h5 class = 'bought-modal-window-title modal-title' id = 'first_modal_label'></h5>
					<button type = 'button' class = 'close white-text' data-dismiss = 'modal' aria-label = 'Close'><span aria-hidden = 'true'>&times;</span></button>
				</div>
				<div class = 'bought-modal-window-body-content modal-body' style = 'text-align: left;'></div>
				<div class = 'modal-footer'>
					<button type = 'button' class = 'd-flex btn cyan darken-3 white-text' data-dismiss = 'modal'>OK</button>
				</div>
			</div>
		</div>
	</div>
	<div class = 'modal animated zoomInDown slow' id = 'added_to_wishes' tabindex = '-1' role = 'dialog' aria-labelledby = 'second_modal_label' aria-hidden = 'true'>
		<div class = 'modal-dialog' role = 'document'>
			<div class = 'modal-content cyan lighten-3'>
				<div class = 'modal-header'>
					<h5 class = 'added-to-wishes-modal-window-title modal-title' id = 'second_modal_label'></h5>
					<button type = 'button' class = 'close white-text' data-dismiss = 'modal' aria-label = 'Close'><span aria-hidden = 'true'>&times;</span></button>
				</div>
				<div class = 'added-to-wishes-modal-window-body-content modal-body' style = 'text-align: left;'></div>
				<div class = 'modal-footer'>
					<button type = 'button' class = 'd-flex btn cyan darken-3 white-text' data-dismiss = 'modal'>OK</button>
				</div>
			</div>
		</div>
	</div>
	{!! view('elements.callback_button') !!}
	{!! view('elements.advantages') !!}
	<div class = 'container-fluid mt-5 mb-5'>
		<div class = 'row'>
			<div class = 'col'>
				<h2 class = ' text-center'>Therefore, the beauty and fragrance of Paradise reigns around us.</h2>
			</div>
		</div>
	</div>
</main>
@endsection

@section('handling_scripts')
<script type = 'text/javascript' src = '{{ asset('resources/js/catalogue.js') }}'></script>
@endsection