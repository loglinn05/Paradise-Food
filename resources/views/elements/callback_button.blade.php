<div type = 'button' class = 'callback-bt' data-toggle = 'modal' data-target = '#modalSubscriptionForm'>
	<div class = 'text-call white-text'>
		<i class = 'fa fa-phone'></i>
		<label for = 'mail' id = 'lab'><span>ЗАКАЗ<br>ЗВОНКА</span></label>
	</div>
</div>

<div class = 'modal animated zoomInDown slow' id = 'modalSubscriptionForm' tabindex = '-1' role = 'dialog' aria-labelledby = 'myModalLabel' aria-hidden = 'true' style = 'text-align: left;'>
	<div class = 'modal-dialog modal-notify ' role = 'document'>
		<div class = 'modal-content'>
			<div class = 'modal-header text-center'>
				<h4 class = 'modal-title white-text w-100 font-weight-bold py-2 blue darken-4'>Order a call</h4>
				<button type = 'button' class = 'close' data-dismiss = 'modal' aria-label = 'Close'>
				<span aria-hidden = 'true' class = 'text-indigo'>&times;</span>
				</button>
			</div>
			<div class = 'modal-body' style = 'background-image: url({{ asset('resources/images/call.jpg') }}); background-size: cover;'>
				<div class = 'md-form mb-5'>
					<i class = 'fas fa-user prefix text-primary'></i>
					<input type = 'text' id = 'form3' class = 'form-control validate'>
					<label data-error = 'wrong' data-success = 'right' for = 'form3'>Your name</label>
				</div>
				<div class = 'md-form'>
					<i class = 'fas fa-phone-alt prefix text-primary'></i>
					<input type = 'tel' pattern = "+380 [1-9][0-9] [0-9]{3} [0-9]{4}" id = 'form2' class = 'form-control validate'>
					<label data-error = 'wrong' data-success = 'right' for = 'form2'>Your phone number</label>
				</div>
			</div>
			<div class = 'modal-footer justify-content-center'>
				<a type = 'button' class = 'btn btn-outline-indigo waves-effect'>Order<i class = 'fas fa-paper-plane-o ml-1'></i></a>
			</div>
		</div>
	</div>
</div>