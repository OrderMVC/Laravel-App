@extends('_layout')

@section('content')
<div class="row">
@if($items)
  <div class="grid">
    @foreach($items as $key => $item)
      <ul class="four_up tiles">
        @if(class_basename($item) === 'PhysicalItem')
          <li>
            <figure>
              <img src="http://placepuppy.it/images/homepage/Afra_004.jpg" class="photo image">
            </figure>
            <figcaption>
              <div class="label info">Physical</div>
              <p><strong>{{$item->name}}</strong></p>
              <p>Weight: {{$item->weight}} Lbs</p>
              <p>{{$item->stock}} Left</p>
            </figcaption>
          </li>
        @else
          <li>
            <figure>
              <img src="http://placepuppy.it/images/homepage/Beagle_puppy_6_weeks.JPG" class="photo image">
            </figure>
            <figcaption>
              <div class="label default">Digital</div>
              <p><strong>{{$item->name}}</strong></p>
              <p>Size: {{$item->size}} Mbs</p>
              <p>Format: {{$item->format}}</p>
            </figcaption>
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