<table class="striped">
  <thead>
    <tr>
      <th>Ship Date</th>
      <th>Orderer</th>
      <th>Items</th>
      <th>Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
      <tr>
        <td>{{$order->shipped_at->toFormattedDateString()}}</td>
        <td>{{$order->fullName}}</td>
        <td>{{$order->items->count()}}</td>
        <td>{{currency($order->total)}}</td>
        <td>{{HTML::linkRoute('orders.show', 'View Details', array($order->id))}}</td>
      </tr>
    @endforeach
  </tbody>
</table>