@extends('_layout')

@section('content')
<div class="row">

		@if($cart->count())
			@include('cart._table')
			@include('orders._addressForm')
		@else
			<h4>Yo Man! You need to shop more!</h4>
			<div class="medium primary btn">
				{{HTML::linkRoute('items.index', 'Shop Now')}}
			</div>
		@endif

</div>
@stop