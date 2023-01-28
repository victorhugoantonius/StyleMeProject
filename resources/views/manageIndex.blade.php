@extends('master')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
       {{ session('success') }}
      </div>
    @endif

    <div>
        <a href="/manageproduct/add" class="btn btn-dark mt-3">Add Product +</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/manageproduct/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="searchmanage" value="{{ request('searchmanage') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                  </div>
            </form>
        </div>
       
    </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="..." style="width: 200px; height: 200px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <h5 class="card-title">IDR {{ $product->price }}</h5>
                      <p class="card-text">{{ $product->short_description }}</p>
                      <a href="/?category={{ $product->category->slug }}" class="card-text">Category: {{ $product->category->name }}</a>
                      <br>
                      
                          <a href="/manageproduct/edit/{{ $product->id  }}" class="btn btn-dark mt-3 mb-2">Edit</a>
                          <a href="/manageproduct/delete/{{ $product->id }}" class="btn btn-danger mt-3 mb-2" onclick="return confirm('Are you sure you want to delete this product')">Delete</a>
                    
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
   
@endsection

