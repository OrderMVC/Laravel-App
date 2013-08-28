@extends('_layout')

@section('content')
<div class="row">
@if($cart->count())
  @include('cart._table')
  <div class="row">
    <div class="btn info medium">
      {{HTML::linkRoute('cart.destroy', 'Empty Cart')}}
    </div>
    <div class="medium secondary btn">
      {{HTML::linkRoute('items.index', 'Back To Shopping')}}
    </div>
    <div class="btn primary medium">
      {{HTML::linkRoute('orders.create', 'Checkout')}}
    </div>
  </div>
@else
  <h4>Yo Man! You need to shop more!</h4>
  <div class="medium primary btn">
    {{HTML::linkRoute('items.index', 'Shop Now')}}
  </div>
@endif

</div>
@stop