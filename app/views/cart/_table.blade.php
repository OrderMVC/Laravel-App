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