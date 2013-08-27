@extends('_layout')

@section('content')
<div class="row">
@if(!$user)
  <div class="danger alert">
    <h3>You Must Sign In To Checkout!</h3>
  </div>
  <div class="btn info medium">
    {{HTML::linkRoute('users.create', 'Sign In')}}
  </div>
@else

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

@endif
</div>
@stop