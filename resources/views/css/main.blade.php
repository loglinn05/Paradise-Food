<style>
	html {
		font-size: 1rem;
	}

	body {
		width: 100%;
		font: normal 1em/1.3 'Noto Serif', Georgia, serif;
		min-height: 100%;
		color: #1a2356;
		background-color: #c4e8fe;
		margin-top: 80px;
		-webkit-overflow-scrolling: touch;
		text-shadow: 0 0 0.5em #fff;
	}

	main {
		text-align: center;
	}

	hr {
		border-top: 2px solid #1a2356;
		width: 95%;
		margin-top: .3em;
		margin-bottom: 1em;
	}

	i {
		color: #00f;
		font-size: 1.4rem;
	}

	.callback-bt {
		background: #06f;
		border: 1px solid #00f;
		border-radius: 50%;
		box-shadow: 0 8px 10px #1a2356;
		cursor: pointer;
		height: 68px;
		text-align: center;
		width: 68px;
		position: fixed;
		right: 8%;
		bottom: 18%;
		z-index: 999;
		transition: .3s;
		-webkit-animation: hoverWave linear 1s infinite;
		animation: hoverWave linear 1s infinite;
	}

	.callback-bt .text-call {
		height: 68px;
		width: 68px;
		border-radius: 50%;
		position: relative;
		overflow: hidden;
	}

	.callback-bt .text-call label span {
		top: 10px;
		right: 1px;
		text-align: center;
		color: #1a2356;
		opacity: 1;
		font-size: 12px;
		position: relative;
		font-weight: 900;
		text-transform: uppercase;
		transition: opacity .3s linear;
		font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	}

	.callback-bt .text-call:hover label span {
		opacity: 1;
		font-size: 12px;
	}

	.callback-bt:hover i {
		display: none;
	}

	.callback-bt:hover {
		z-index: 1;
		background: #fff;
		background-size: cover;
		color: transparent;
		transition: .3s;
	}

	.callback-bt:hover i {
		color: #3e2723;
		font-size: 40px;
		transition: .3s;
	}

	.callback-bt i {
		color: #fff;
		font-size: 34px;
		transition: .3s;
		line-height: 66px;
		transition: .5s ease-in-out;
	}

	.callback-bt i {
		animation: 1200ms ease 0s normal none 1 running shake;
		animation-iteration-count: infinite;
		-webkit-animation: 1200ms ease 0s normal none 1 running shake;
		-webkit-animation-iteration-count: infinite;
	}

	@-webkit-keyframes hoverWave {
		0% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 0 rgba(63, 166, 255, 0.2), 0 0 0 0 rgba(63, 166, 255, 0.2)
		}

		40% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 15px rgba(63, 166, 255, 0.2), 0 0 0 0 rgba(63, 166, 255, 0.2)
		}

		80% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 30px rgba(63, 166, 255, 0), 0 0 0 26.7px rgba(63, 166, 255, 0.067)
		}

		100% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 30px rgba(63, 166, 255, 0), 0 0 0 40px rgba(63, 166, 255, 0)
		}
	}

	@keyframes hoverWave {
		0% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 0 rgba(63, 166, 255, 0.2), 0 0 0 0 rgba(63, 166, 255, 0.2)
		}

		40% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, 0.3), 0 0 0 15px rgba(63, 166, 255, 0.2), 0 0 0 0 rgba(63, 166, 255, 0.2)
		}

		80% {
			box-shadow: 0 8px 10px rgba(63, 166, 255, .3), 0 0 0 30px rgba(63, 166, 255, 0), 0 0 0 26.7px rgba(63, 166, 255, 0.067)
		}

		100% {
			box-shadow: 0 8px 10px rgba(63, 116, 255, 0.3), 0 0 0 30px rgba(63, 166, 255, 0), 0 0 0 40px rgba(63, 166, 255, 0)
		}
	}

	@keyframes shake {
		0% {
			transform: rotateZ(0deg);
			-ms-transform: rotateZ(0deg);
			-webkit-transform: rotateZ(0deg);
		}

		10% {
			transform: rotateZ(-30deg);
			-ms-transform: rotateZ(-30deg);
			-webkit-transform: rotateZ(-30deg);
		}

		20% {
			transform: rotateZ(15deg);
			-ms-transform: rotateZ(15deg);
			-webkit-transform: rotateZ(15deg);
		}

		30% {
			transform: rotateZ(-10deg);
			-ms-transform: rotateZ(-10deg);
			-webkit-transform: rotateZ(-10deg);
		}

		40% {
			transform: rotateZ(7.5deg);
			-ms-transform: rotateZ(7.5deg);
			-webkit-transform: rotateZ(7.5deg);
		}

		50% {
			transform: rotateZ(-6deg);
			-ms-transform: rotateZ(-6deg);
			-webkit-transform: rotateZ(-6deg);
		}

		60% {
			transform: rotateZ(5deg);
			-ms-transform: rotateZ(5deg);
			-webkit-transform: rotateZ(5deg);
		}

		70% {
			transform: rotateZ(-4.28571deg);
			-ms-transform: rotateZ(-4.28571deg);
			-webkit-transform: rotateZ(-4.28571deg);
		}

		80% {
			transform: rotateZ(3.75deg);
			-ms-transform: rotateZ(3.75deg);
			-webkit-transform: rotateZ(3.75deg);
		}

		90% {
			transform: rotateZ(-3.33333deg);
			-ms-transform: rotateZ(-3.33333deg);
			-webkit-transform: rotateZ(-3.33333deg);
		}

		100% {
			transform: rotateZ(0deg);
			-ms-transform: rotateZ(0deg);
			-webkit-transform: rotateZ(0deg);
		}
	}

	@-webkit-keyframes shake {
		0% {
			transform: rotateZ(0deg);
			-ms-transform: rotateZ(0deg);
			-webkit-transform: rotateZ(0deg);
		}

		10% {
			transform: rotateZ(-30deg);
			-ms-transform: rotateZ(-30deg);
			-webkit-transform: rotateZ(-30deg);
		}

		20% {
			transform: rotateZ(15deg);
			-ms-transform: rotateZ(15deg);
			-webkit-transform: rotateZ(15deg);
		}

		30% {
			transform: rotateZ(-10deg);
			-ms-transform: rotateZ(-10deg);
			-webkit-transform: rotateZ(-10deg);
		}

		40% {
			transform: rotateZ(7.5deg);
			-ms-transform: rotateZ(7.5deg);
			-webkit-transform: rotateZ(7.5deg);
		}

		50% {
			transform: rotateZ(-6deg);
			-ms-transform: rotateZ(-6deg);
			-webkit-transform: rotateZ(-6deg);
		}

		60% {
			transform: rotateZ(5deg);
			-ms-transform: rotateZ(5deg);
			-webkit-transform: rotateZ(5deg);
		}

		70% {
			transform: rotateZ(-4.28571deg);
			-ms-transform: rotateZ(-4.28571deg);
			-webkit-transform: rotateZ(-4.28571deg);
		}

		80% {
			transform: rotateZ(3.75deg);
			-ms-transform: rotateZ(3.75deg);
			-webkit-transform: rotateZ(3.75deg);
		}

		90% {
			transform: rotateZ(-3.33333deg);
			-ms-transform: rotateZ(-3.33333deg);
			-webkit-transform: rotateZ(-3.33333deg);
		}

		100% {
			transform: rotateZ(0deg);
			-ms-transform: rotateZ(0deg);
			-webkit-transform: rotateZ(0deg);
		}
	}

	.view_products,
	.order_cards {
		color: #1a2356;
		text-shadow: 3px 3px 3px #fff;
		border: 3px solid #1a2356;
	}

	.navbar-brand img {
		width: 50px;
	}
	.navbar-nav li {
		padding-right: 20px;
	}

	.nav-link {
		font-size: 1.1em !important;
	}

	.padding {
		padding-bottom: 2em;
	}

	.alert {
		width: 70%;
		margin: 0 auto;
		padding-top: 2em;
	}

	p:first-letter {
		color: #6a5acd;
		font: bold 1.7rem 'Cormorant Infant', serif;
	}

	#mail {
		visibility: hidden;
	}

	#mail:checked {
		visibility: visible;
	}

	#mail:checked + label {
		position: fixed;
		top: 20rem;
		left: 0;
		bottom: 0;
		right: 0;
		z-index: 99;
		color: rgba(0, 0, 0, 0);
		background: #CE9B30FF;
		cursor: pointer;
	}

	div#carousel {
		perspective: 1200px;
		background:;
		padding-top: 10%;
		font-size: 0;
		margin-bottom: 3rem;
		overflow: hidden;
	}

	figure#products {
		transform-style: preserve-3d;
		height: 300px;
		transform-origin: 50% 50% -500px;
		transition: 1s;
	}

	figure#products img {
		width: 40%;
		max-width: 425px;
		position: absolute;
		left: 30%;
		transform-origin: 50% 50% -500px;
		outline: 1px solid transparent;
	}

	figure#products img:nth-child(1) {
		transform: rotateY(0deg);
	}

	figure#products img:nth-child(2) {
		transform: rotateY(-45deg);
	}

	figure#products img:nth-child(3) {
		transform: rotateY(-90deg);
	}

	figure#products img:nth-child(4) {
		transform: rotateY(-135deg);
	}

	figure#products img:nth-child(5) {
		transform: rotateY(-180deg);
	}

	figure#products img:nth-child(6) {
		transform: rotateY(-225deg);
	}

	figure#products img:nth-child(7) {
		transform: rotateY(-270deg);
	}

	figure#products img:nth-child(8) {
		transform: rotateY(-315deg);
	}

	div#carousel ~ span {
		color: #40c4ff;
		margin: 5%;
		display: inline-block;
		text-decoration: none;
		font-size: 3rem;
		transition: 0.6s color;
		position: relative;
		margin-top: -16rem;
		border-bottom: none;
		line-height: 0;
	}

	div#carousel ~ span:hover {
		color: #888;
		cursor: pointer;
	}
</style>