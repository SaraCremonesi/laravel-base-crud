<h1>EDIT YOUR SHOE</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('shoes.update', $shoe) }}" method="put">
  @csrf
  @method('PUT')

  <div>
    <div>
      <label>Brand</label>
      <input type="text" name="brand" value="{{ old('brand') ? old('brand') : $shoe->brand }}">
    </div>

    <div>
      <label>Model</label>
      <input type="text" name="model" value="{{ old('model') ? old('model') : $shoe->model }}">
    </div>

    <div>
      <label>Color</label>
      <input type="text" name="color" value="{{ old('color') ? old('color') : $shoe->color }}">
    </div>

    <div>
      <label>Size</label>
      <input type="text" name="size" value="{{ old('size') ? old('size') : $shoe->size }}">
    </div>

    <div>
      <label>Price</label>
      <input type="text" name="price" value="{{ old('price') ? old('price') : $shoe->price }}">
    </div>

    <div>
      <label>Description</label>
      <textarea name="description" rows="8" cols="80">{{ old('description') ? old('description') : $shoe->description }}</textarea>
    </div>
    
    <div>
      <input type="submit" value="Edit">
    </div>
  </div>
</form>
