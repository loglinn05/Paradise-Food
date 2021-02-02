<style type = 'text/css'>
	html,
	body,
	header,
	section,
	.view {
		height: 100%;
	}

	.btn .fa {
		margin-left: 3px;
	}

	.hr-light {
		border-top: 3px solid #fff;
		width: 80px;
	}

	#tools {
		margin-top: -5rem;
		background-image: url('{{ asset('resources/images/paradise_foods_header.jpg') }}');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
	}

	.top-nav-collapse {
		background-color: #82b1ff !important;
	}

	.navbar:not(.top-nav-collapse) {
		background: transparent !important;
	}

	.navbar-brand img {
		width: 50px !important;
	}

	.navbar-nav li {
		padding-right: 20px;
	}

	.nav-link {
		font-size: 1.1em !important;
		color: #1A2377;
		text-shadow: 2px 2px 3px #fff;
	}

	.nav-link i {
		font-size: 2em !important;
		color: #00f;
		text-shadow: 0 0 3px #fff;
	}

	@media (max-width:767px) {
		html,
		body,
		header,
		section
		.view {
			height: 100vh;
		}

		div.card {
			margin-bottom: 4em;
		}

		#bruno {
			display: none;
		}

		#little {
			display: block;
		}
	}

	@media (min-width:767px) {
		#little {
			display: none;
		}
	}

	@media (max-width:991px) {
		.navbar:not(.top-nav-collapse) {
			background: #82b1ff !important;
		}
	}
</style>