@extends('layout.header')

@section('content')
  <div class="card mt-3">
    <h3 class="card-header text-center">
      <div class="row">
        <div class="col-9">List Of Products</div>
        <div class="col-3">
          <a href="{{ url('products/create') }}" class=" btn btn-success">
            Add Product<img src="{{ asset('img/plus.svg') }}" alt="add" class="ml-auto" style="width: 1.5em">
          </a>
        </div>
      </div>
    </h3>
    <div class="card-body table-responsive">
      <table class="table table-striped">
        <thead class="bg-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Descrption</th>
            <th scope="col">photo</th>
            <th scope="col">Creation Date</th>
            <th scope="col" style="width: 250px">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $prod)
            <tr>
              <th scope="row">{{ $prod->id }}</th>
              <td>{{ $prod->name }}</td>
              <td>{{ $prod->description }}</td>
              <td>{{ $prod->image }}</td>
              <td>{{ $prod->created_at }}</td>
              <td>
                <a href="{{ route('products.show', $prod) }}">
                  <button class="btn btn-info">
                    Show
                  </button>
                </a>
                <a href="{{ route('products.edit', $prod) }}">
                  <button class="btn btn-warning">Edit</button>
                </a>
                <button class="btn btn-danger"
                  onclick="submitDeleteForm({{ 'deleteForm' . $prod->id }}, '{{ $prod->name }}')">Delete
                </button>
                <form id="deleteForm{{ $prod->id }}" method="POST"
                  action="{{ route('products.destroy', $prod) }}">
                  @csrf
                  @method('delete')
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('js/delete.js') }}"></script>
@endsection
