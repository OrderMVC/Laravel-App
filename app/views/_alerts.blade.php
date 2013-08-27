@if($message = Session::get('error'))
	<div class="error alert">
		{{$message}}
		<i class="dismiss icon-cancel"></i>
	</div>
@endif

@if($message = Session::get('success'))
	<div class="success alert">
		{{$message}}
		<i class="dismiss icon-cancel"></i>
	</div>
@endif