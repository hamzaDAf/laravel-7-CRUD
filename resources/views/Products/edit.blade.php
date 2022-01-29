@extends('layout.header')

@section('content')
  <div class="card mt-3">
    <h3 class="card-header">
      Update Product : <span class="text-info">{{ $prod->id .' - '. $prod->name }}</span>
    </h3>
    <div class="card-body">
      <form method="post" action="{{ route('products.update', $prod) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="productName">
            <h5 class="card-title">Product's Name</h5>
          </label>
          <input type="text" name="name" value="{{ $prod->name }}" class="form-control text-danger" id="productName">
        </div>
        <div class="form-group">
          <label for="productDescription">
            <h5 class="card-title">Product's Description</h5>
          </label>
          <input type="text" name="description" value="{{ $prod->description }}" class="form-control text-danger" id="productDescription">
        </div>
        <div class="form-group">
          <label for="productPhoto">
            <h5 class="card-title">Uploade Photo</h5>
          </label>
          <input type="file" name="image" value="{{ $prod->image }} class="form-control-file" id="productPhoto">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
    </div>
  </div>
@endsection
