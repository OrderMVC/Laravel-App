@extends('_layout')

@section('content')
<div class="row">
@if($items)
	<div class="grid">
		@foreach($items as $key => $item)
			<ul class="four_up tiles">
				@if(class_basename($item) === 'PhysicalItem')
					<li>
						<img src="http://placepuppy.it/images/homepage/Afra_004.jpg" class="photo image">
					</li>
				@else
					<li>
						<img src="http://placepuppy.it/images/homepage/Beagle_puppy_6_weeks.JPG" class="photo image">
					</li>
				@endif
			</ul>
		@endforeach
	</div>
@else
	<h4>Yo Man! There aren't any items yet!</h4>
@endif
</div>
@stop