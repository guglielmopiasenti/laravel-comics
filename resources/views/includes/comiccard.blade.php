<ul class="ul-comic">
  @foreach(config('comics') as $comic)
      <li class="li-comic">
          <img class="img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
          {{ $comic['series'] }}
      </li>
  @endforeach
</ul>