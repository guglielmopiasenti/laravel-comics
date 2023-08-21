@extends('layouts.main')
@section('title', 'Comic')

@section('main-content')

<div class="comic-container">
  <div class="comic-image-wrapper">
    <div class="comic-info-img">COMIC BOOK</div>
    <img class="comic-image" src="{{ $comic['thumb'] }}" alt="$comic['series']">
    <div class="comic-view-gallery">VIEW GALLERY</div>
  </div>
  <div class="comic-details">
    <div class="comic-title-section">
      <h3 class="comic-title">{{$comic['title']}}</h3>
      <div class="comic-price-availability">
        <div class="comic-price">US Price: {{$comic['price']}}</div>
        <div class="comic-available">AVAILABLE</div>
        <div>
          <div class="comic-availability">
            Check Availability
          </div>
        </div>
      </div>
      <p class="comic-description">{{$comic['description']}}</p>
    </div>
    <div class="comic-advertisement-card">
      <div>ADVERTISEMENT</div>
      <img src="public/img/adv.jpg" alt="">
    </div>
  </div>
</div>
  <div class="comic-talent-section">
    <div class="comic-container">
      <div class="comic-talent-specs">

        <div class="comic-talent">
          <h1>Talent</h1>
          <div class="comic-artists">
            <div>Art by:</div>
            <div class="artists">
              {{ implode(', ', $comic['artists']) }}
            </div>
          </div>
          <div class="comic-writers">
            <div>Written by:</div>
            <div class="writers">{{ implode(', ', $comic['writers']) }}</div>
          </div>
        </div>
        <div class="comic-specs">
          <h1>Specs</h1>
          <div class="comic-series">
            <span>Series:</span>
            <span>{{$comic['series']}}</span>
          </div>
          <div class="comic-us-price">
            <span>US Price:</span>
            <span>{{$comic['price']}}</span>
          </div>
          <div class="comic-sale-date">
            <span>On Sale Date:</span>
            <span>{{$comic['sale_date']}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection