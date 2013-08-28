@extends('_layout')

@section('content')
<div class="row">
  <h3>Order #{{$order->id}}</h3>

  <h4><legend>Shipped To</legend></h4>
  <p>
    {{$order->fullName}}</br>
    {{$order->address->street}}</br>
    {{$order->address->city}},
    {{$order->address->state}},
    {{$order->address->zip}}
  </p>

  <h4><legend>Items</legend></h4>

  @include('orders._itemsTable')
</div>
@stop