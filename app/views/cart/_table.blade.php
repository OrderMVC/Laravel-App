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
				<td>{{$item->name}}</td>
				<td>{{$item->type}}</td>
				<td>{{$item->amount}}</td>
				<td>{{currency($item->totalPrice)}}</td>
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