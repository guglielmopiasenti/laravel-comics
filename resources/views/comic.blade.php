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
    <div></div>
  </div>
  <div></div>
</div>

@endsection