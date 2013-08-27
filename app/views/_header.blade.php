<div class="row">
	@if($user)
		<div class="label default">Hello {{$user->first_name}} {{$user->last_name}}</div>
		<p>
			{{HTML::linkRoute('users.create', 'Not You?')}}
		</p>
	@else
		<div class="label warning">You Have Not Signed In</div>
		<p>
			{{HTML::linkRoute('users.create', 'Sign In')}}
		</p>
	@endif
</div>

<div class="row">
	<h4>
		Cart
		<li class="secondary badge">{{count($cart)}}</li>
	</h4>
	<p>
		{{HTML::linkRoute('cart.index', 'View Cart')}}
	</p>
</div>