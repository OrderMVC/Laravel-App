@extends('_layout')

@section('content')
<div class="row">
@if($cart)
  <table class="striped">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Type</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cart as $key => $item)
        <tr>
          <td>{{$item['item']->name}}</td>
          <td>{{$item['item']->type}}</td>
          <td>{{$item['count']}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  <h4>Yo Man! You need to shop more!</h4>
@endif
</div>
<div class="row">
  <div class="btn info">
    {{HTML::linkRoute('cart.destroy', 'Empty Cart')}}
  </div>
  <div class="btn primary">
    {{HTML::linkRoute('orders.create', 'Checkout')}}
  </div>
</div>
@stop