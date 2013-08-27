{{Form::open(array('route' => 'orders.store'))}}
  <legend>Shipping Address</legend>

  <div class="field <?= $errors->first('street')? "danger": null ?>">
    {{Form::text('address[street]', $order->address->street, array('placeholder' => 'Street', 'class' => 'input'))}}
  </div>

  <div class="field <?= $errors->first('city')? "danger": null ?>">
    {{Form::text('address[city]', $order->address->city, array('placeholder' => 'City', 'class' => 'input'))}}
  </div>

  <div class="field <?= $errors->first('state')? "danger": null ?>">
    {{Form::text('address[state]', $order->address->state, array('placeholder' => 'State', 'class' => 'input'))}}
  </div>

  <div class="field <?= $errors->first('zip')? "danger": null ?>">
    {{Form::text('address[zip]', $order->address->zip, array('placeholder' => 'Zip', 'class' => 'input'))}}
  </div>

  <div class="btn primary medium">
    {{Form::submit('Submit')}}
  </div>
{{Form::close()}}