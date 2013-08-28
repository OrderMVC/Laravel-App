@extends('_layout')

@section('content')
<div class="row">
@if($orders->count())
  @include('orders._table')
  <div class="row">
    <div class="medium secondary btn">
      {{HTML::linkRoute('items.index', 'Back To Shopping')}}
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