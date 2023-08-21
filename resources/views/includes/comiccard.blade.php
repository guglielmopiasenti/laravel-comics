<ul class="ul-comic">
  @foreach(config('comics') as $comic)
    <a href="{{url("/comic/$loop->index")}}">
      <li class="li-comic">
        <img class="img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        {{ $comic['series'] }}
      </li>
    </a>
  @endforeach
</ul>