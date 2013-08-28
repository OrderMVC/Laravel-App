<table class="striped">
  <thead>
    <tr>
      <th>Item Name</th>
      <th>Type</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cart as $key => $item)
      <tr>
        <td>{{$item['item']->name}}</td>
        <td>{{$item['item']->type}}</td>
        <td>{{$item['count']}}</td>
        <td>{{currency($item['count'] * $item['item']->price)}}</td>
      </tr>
    @endforeach
    <tr>
      <td></td>
      <td></td>
      <td><strong>Total</strong></td>
      <td><strong>{{currency($cart->getTotal())}}</strong></td>
    </tr>
  </tbody>
</table>