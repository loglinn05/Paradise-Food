<header>
	<nav class = 'navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar'>
		<div class = 'container'>
			<a class = 'navbar-brand' href = '#' data-toggle = 'modal' data-target = '#modalPush'><img src = '{{ asset('resources/images/angel_with_watermelon_little.png') }}' class = 'd-inline-block align-middle'><strong style = 'color:#1A2377; text-shadow: 3px 3px 3px #fff;'>Paradise Foods</strong></a>
			<button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarSupportedContent-7' aria-controls = 'navbarSupportedContent-7' aria-expanded = 'false' aria-label = 'Toggle navigation'><span class = 'navbar-toggler-icon'></span></button>
			<div class = 'collapse navbar-collapse' id = 'navbarSupportedContent-7'>
				<ul class = 'navbar-nav mr-auto'>
					<li class = 'nav-item active mt-auto mb-auto'>
						<a class = 'nav-link' href = '{{ url('/project') }}'>Home</a>
					</li>
					<li class = 'nav-item mt-auto mb-auto'>
						<a class = 'nav-link' href = '{{ url('project/contacts') }}'>Сontacts</a>
					</li>
					<li class = 'nav-item mt-auto mb-auto'>
						<a class = 'nav-link' href = '{{ url('project/cart') }}' title = "Cart"><i class = 'fas fa-shopping-basket'></i></a>
					</li>
					<li class = 'nav-item'>
						<a class = 'nav-link' href = '{{ url('project/wishes') }}' title = "Wishes"><i class = 'far fa-heart'></i></a>
					</li>
				</ul>
				<span class = 'navbar-text text-left' style = 'color:#1A2377; text-shadow:2px 2px 3px #fff;'>E-mail: loglinn05@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;Tel.: +380 63 139 2847</span>
			</div>
		</div>
	</nav>
	<div id = 'tools' class = 'view'>
		<div class = 'mask rgba-blue-sligh d-flex align-items-center'>
			<div class = 'container'>
				<div class = 'row mt-5'>
					<div class = 'col-md-1'></div>
					<div class = 'col-md-10 text-center mt-5'>
						<h1 class = 'h1-responsive font-weight-bold mt-sm-5 text-uppercase text-center wow fadeInDown' data-wow-delay = '0.3s'><strong>HEALTHY FOOD STORE</strong></h1>
						<hr class = 'hr-light my-4 w-100 wow fadeInLeft' data-wow-delay = '0.4s'>
						
						<div class = 'mt-2 d-flex justify-content-lg-between'>
							<a href = '{{ url('/project/catalogue') }}' class = 'view_products btn-lg btn-outline font-weight-bold text-uppercase p-2 hoverable float-left wow fadeInLeft mb-4 mx-auto' data-wow-delay = '0.4s'>View products</a>
							<a href = '{{ url('/project/cart') }}' class = 'order_cards btn-lg btn-outline p-2 hoverable font-weight-bold text-uppercase float-right wow fadeInRight mb-4 mx-auto' data-wow-delay = '0.4s'>Cart</a>
							<a href = '{{ url('/project/wishes') }}' class = 'order_cards btn-lg btn-outline p-2 hoverable font-weight-bold text-uppercase float-right wow fadeInRight mb-4 mx-auto' data-wow-delay = '0.4s'>Wishes</a>
						</div>
					</div>
					<div class = 'col-md-1'></div>
				</div>
			</div>
		</div>
	</div>
</header>

<div class = 'modal animated zoomInDown slow' id = 'modalPush' tabindex = '-1' role = 'dialog' aria-labelledby = 'exampleModalLabel'
	aria-hidden = 'true'>
	<div class = 'modal-dialog modal-notify' role = 'document'>
		<div class = 'modal-content text-center'>
			<div class = 'modal-header d-flex justify-content-center'>
				<h4 class = 'heading indigo-text font-weight-bold'>Welcome to Paradise Food</h4>
			</div>
			<div class = 'modal-body winter-neva-gradient'>
				<img src = '{{ asset('resources/images/angel_with_watermelon_big.png') }}' class = 'img-fluid rounded mx-auto d-block'>
				<div class = 'text-center'>
					<p>Welcome to the heavenly delight shop. Buying our product, you get a great mood.</p>
				</div>
			</div>
			<div class = 'modal-footer flex-center'>
				<a href = '{{ url('/project/catalogue') }}' class = 'btn btn-indigo'>Yes</a>
				<a type = 'button' class = 'btn btn-outline-indigo waves-effect' data-dismiss = 'modal'>No</a>
			</div>
		</div>
	</div>
</div>