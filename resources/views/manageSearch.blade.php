@extends('master')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($searched_products as $searched_product)
                <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $searched_product->image) }}" class="card-img-top" alt="..." style="width: 200px; height: 200px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $searched_product->name }}</h5>
                      <h5 class="card-title">IDR {{ $searched_product->price }}</h5>
                      <p class="card-text">{{ $searched_product->short_description }}</p>
                      <a href="/?category={{ $searched_product->category->slug }}" class="card-text">Category: {{ $searched_product->category->name }}</a>
                      <br>
                      <a href="/manageproduct/edit/{{ $searched_product->id  }}" class="btn btn-dark mt-3 mb-2">Edit</a>
                          <a href="/manageproduct/delete/{{ $searched_product->id }}" class="btn btn-danger mt-3 mb-2" onclick="return confirm('Are you sure you want to delete this product')">Delete</a>
                    
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $searched_products->links() }}
    </div>
   
@endsection

