<h1>Create your shoe</h1>

<form action="{{ route('shoes.store') }}" method="post">
  @csrf
  @method('POST')

  <div>
    <div>
      <label>Brand</label>
      <input type="text" name="brand" value="{{ old('brand') }}">
    </div>

    <div>
      <label>Model</label>
      <input type="text" name="model" value="{{ old('model') }}">
    </div>

    <div>
      <label>Color</label>
      <input type="text" name="color" value="{{ old('color') }}">
    </div>

    <div>
      <label>Size</label>
      <input type="text" name="size" value="{{ old('size') }}">
    </div>

    <div>
      <label>Price</label>
      <input type="text" name="price" value="{{ old('price') }}">
    </div>

    <div>
      <label>Description</label>
      <textarea name="description" rows="8" cols="80">{{ old('description') }}</textarea>
    </div>


    <div>
      <input type="submit" value="Save">
    </div>
  </div>
</form>
