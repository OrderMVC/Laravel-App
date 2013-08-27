@extends('_layout')

@section('content')
<div class="row">
@if($items)
  <div class="grid">
    <ul class="tiles four_up">
      @foreach($items as $key => $item)
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
              <div class="btn secondary">
                {{HTML::linkRoute('physical-items.add', 'Add To Cart', array($item->id))}}
              </div>
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
              <div class="btn secondary">
                {{HTML::linkRoute('digital-items.add', 'Add To Cart', array($item->id))}}
              </div>
            </figcaption>
          </li>
        @endif
      @endforeach
    </ul>
  </div>
@else
  <h4>Yo Man! There aren't any items yet!</h4>
@endif
</div>
@stop