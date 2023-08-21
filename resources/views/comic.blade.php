@extends('layouts.main')
@section('title', 'Comic')

@section('main-content')

<div class="container">
  <div>
    <img class="img-comic-page" src="{{ $comic['thumb']}}" alt="$comic['series']">
  </div>
  <div>
    <div>
      <h2>{{$comic['title']}}</h2>
      <div>
        <div>US Price: {{$comic['price']}} <span>AVAILABLE</span></div>
        <div>Check Availability</div>
      </div>
      <p>{{$comic['description']}}</p>
    </div>
    <div>
      <div>
        <h1>Talent</h1>
        <div>
          <div>Art by:</div>
          <div>
            {{ implode(', ', $comic['artists']) }}
          </div>
        </div>
        <div>
          <div>Written by:</div>
          <div>{{ implode(', ', $comic['writers']) }}</div>
        </div>
      </div>
      <div>
        <h1>Specs</h1>
        <div>
          <div>Series:</div>
          <div>{{$comic['series']}}</div>
        </div>
        <div>
          <div>US Price:</div>
          <div>{{$comic['price']}}</div>
        </div>
        <div>
          <div>On Sale Date:</div>
          <div>{{$comic['sale_date']}}</div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection