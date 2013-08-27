@extends('_layout')

@section('content')
<div class="row">
	<div class="xlarge primary btn">
		{{HTML::linkRoute('items.index', 'Shop Now')}}
	</div>
	<div class="xlarge primary btn">
		{{HTML::linkRoute('orders.index', 'View Orders')}}
	</div>
</div>
@stop