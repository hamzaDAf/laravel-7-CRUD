@extends('layout.header')

@section('content')
  <div>

    <div class="card m-3" style="">
        <div class="row no-gutters">
          <div class="col-sm-4">
            <img src="{{ asset('img/p2.jpg') }}"  class="img-fluid" alt="...">
          </div>
          <div class="col-sm-8">
            <div class="card-body">
              <h2 class="card-title">{{ $prod->id }} -- {{ $prod->name }}</h2>
              <h3 class="card-text">{{ $prod->description }}</h3>
              <h4 class="card-text"><small class="text-muted">{{ $prod->updated_at }}</small></h4>
            </div>
          </div>
        </div>
      </div>

  </div>
@endsection
