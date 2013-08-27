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
      @include('orders._addressForm')
    @else
      <h4>Yo Man! You need to shop more!</h4>
      <div class="medium primary btn">
        {{HTML::linkRoute('items.index', 'Shop Now')}}
      </div>
    @endif

@endif
</div>
@stop