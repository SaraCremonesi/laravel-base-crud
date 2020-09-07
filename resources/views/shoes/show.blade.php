<h1>{{ $shoe->brand }} {{ $shoe->model }}</h1>

<ul>
  <li>Size: {{ $shoe->size }}</li>
  <li>Color: {{ $shoe->color }}</li>
  <li>Price: {{ $shoe->price }}$</li>
  <li>Description: {{ $shoe->description }}</li>
</ul>
<a href="{{route('shoes.index')}}">Back</a>
<a href="{{route('shoes.edit', $shoe)}}">Edit</a>
