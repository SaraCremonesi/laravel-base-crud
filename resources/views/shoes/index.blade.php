<h1>SHOES</h1>

  @foreach ($shoes as $shoe)
    <ul>
      <li>
        {{ $shoe->brand }} {{ $shoe->model }}
        <div>
          <a href="{{ route('shoes.show', $shoe) }}">Visualizza</a>
        </div>
      </li>
    </ul>
  @endforeach

<a href="{{ route('shoes.create') }}">Create your shoe</a>
