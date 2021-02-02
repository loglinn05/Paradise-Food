@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<main>
	<div class = 'container-fluid mt-5 mb-4 d-flex flex-column justify-content-center align-self-center'>
		<div class = 'row'>
			<div class = 'col-1'></div>
			<div class = 'col-10 text-center mt-5'>
				<h1 class = 'h1-reponsive text-uppercase font-weight-bold mb-0 pt-md-3 pt-3 wow fadeInDown' data-wow-delay = '0.3s'><strong>When you eat our products, you are filled with Grace</strong></h1><br>
				<h5 class = 'h5-reponsive text-uppercase font-weight-bold mb-0 pt-md-2 pt-2 wow fadeInUp' data-wow-delay = '0.3s'>We will help you select and deliver everything you need for you. Save energy for your morning jogging.</h5>
			</div>
			<div class = 'col-1'></div>
		</div>
	</div>
	<hr><br>
	<div class = 'container-fluid mt-2 mb-n5'>
		<div class = 'row'>
			<div class = 'col-md-1'></div>
			<div class = 'col-md-10'>
				<h1 class = 'text-center'>Our popular products, which do not need recommendations.</h1>
				<!--<p class = 'lead text-center'>The quality is guaranteed and tested by many purchasers.</p>-->
			</div>
			<div class = 'col-md-1'></div>
		</div>
	</div>
	<div id = 'carousel'>
		<figure id = 'products'>
			<img src = '{{ asset('resources/images/all_products.jpg') }}'>
			<img src = '{{ asset('resources/images/meat_products.jpg') }}'>
			<img src = '{{ asset('resources/images/baked_goods.jpg') }}'>
			<img src = '{{ asset('resources/images/vegetables.jpg') }}'>
			<img src = '{{ asset('resources/images/fruits.jpg') }}'>
			<img src = '{{ asset('resources/images/sweets.jpg') }}'>
			<img src = '{{ asset('resources/images/dairy_produce.jpg') }}'>
			<img src = '{{ asset('resources/images/honey_products.jpg') }}'>
		</figure>
	</div>
	<span style = 'float: left' class = 'ss-icon' onclick = 'galleryspin("-")'>&lt;</span>
	<span style = 'float: right' class = 'ss-icon' onclick = 'galleryspin("")'>&gt;</span>
	<hr class = 'mt-n5'>
	{!! view('elements.callback_button') !!}
	<div class = 'container-fluid mt-5 d-flex flex-column justify-content-center align-self-center'>
		<div class = 'row'>
			<div class = 'col-md-1'></div>
			<div class = 'col-md-10 text-center'>
				<h2 class = 'h2-reponsive text-uppercase font-weight-bold mb-0 pt-md-3 pt-3 wow fadeInDown' data-wow-delay = '0.3s'><strong>Why are people happy to contact us?</strong></h2><br>
				<h5 class = 'h5-reponsive font-weight-bold mb-0 pt-md-2 pt-2 wow fadeInUp' data-wow-delay = '0.3s'>Because we're going to meet them, efficiently preparing and delivering the highest quality product.<br> <i>Pieces of our hearts are transferred to the quality of our product.</i></h5>
				<img src = '{{ asset('resources/images/pineapple.png') }}' class = 'img-fluid rounded mx-auto d-block animated jello infinite '>
			</div>
			<div class = 'col-md-1'></div>
		</div>
	</div>
	{!! view('elements.advantages') !!}
	<div class = 'container-fluid mt-5 mb-5'>
		<div class = 'row'>
			<div class = 'col'>
				<h2 class = 'text-center'>Therefore, the beauty and fragrance of Paradise reigns around us.</h2>
			</div>
		</div>
		<div class = 'row mt-4'>
			<div class = 'col mt-2 d-flex justify-content-lg-between'>
				<a href = '?action = goods' class = 'view_products btn-lg btn-outline p-2 hoverable font-weight-bold text-uppercase float-right animated flash slower infinite mb-4 mx-auto'>View Products</a>
			</div>
		</div>
	</div>
</main>
@endsection

@section('handling_scripts')
	<script type = 'text/javascript' src = '{{ asset('resources/js/carousel_spin.js') }}'></script>
@endsection