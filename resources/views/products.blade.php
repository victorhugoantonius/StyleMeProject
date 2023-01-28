@extends('master')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
       {{ session('success') }}
      </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                {{-- <div class="product">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="..." style="width: 200px; height: 200px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <h5 class="card-title">IDR {{ $product->price }}</h5>
                      <p class="card-text">{{ $product->short_description }}</p>
                      <a href="/?category={{ $product->category->slug }}" class="card-text">Category: {{ $product->category->name }}</a>
                      <br>
                      <a href="/{{ $product->slug }}" class="btn btn-dark mt-3">Read More</a>
                    
                    </div>
                  </div> --}}
                  <div class="product-card">
                        <div>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="" class="card-image">
                        </div>
                     
                  
                    <div class="info">
                        <h4>{{ $product->name }}</h4>
                        <h5 class="hidden">IDR {{ $product->price }}</h5>
                        <p class="hidden">{{ $product->short_description }}</p>
                        <a href="/{{ $product->slug }}" class="btn btn-dark mt-3 hidden">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
   
    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
   <br>
   <br>
@endsection

