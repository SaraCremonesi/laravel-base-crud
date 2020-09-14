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
    <div>
      <form action="{{ route('shoes.destroy', $shoe) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
      </form>
    </div>
  @endforeach

<a href="{{ route('shoes.create') }}">Create your shoe</a>
