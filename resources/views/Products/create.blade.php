@extends('layout.header')

@section('content')
  <div class="card mt-3">
    <h3 class="card-header">
      Add new Product
    </h3>
    <div class="card-body">
      <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productName">
            <h5 class="card-title">Product's Name</h5>
          </label>
          <input type="text" name="name" class="form-control" id="productName">
        </div>
        <div class="form-group">
          <label for="productDescription">
            <h5 class="card-title">Product's Description</h5>
          </label>
          <input type="text" name="description" class="form-control" id="productDescription">
        </div>
        <div class="form-group">
          <label for="productPhoto">
            <h5 class="card-title">Uploade Photo</h5>
          </label>
          <input type="file" name="image" class="form-control-file" id="productPhoto">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
@endsection
