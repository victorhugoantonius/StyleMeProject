@extends('master')

@section('content')

<h1 class="text-center">Meet Our Stylists</h1>

<div class="container">
    <div class="row">
        @foreach ($stylists as $stylist)
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
              <div class="stylist-card">
                    <div>
                        <img src="{{ asset('storage/' . $stylist->photo) }}" alt="" class="stylist-image">
                    </div>
                 
              
                <div class="info">
                    <h4>{{ $stylist->name }}</h4>
                    <h5 class="hidden">IDR {{ $stylist->rate }}</h5>
                    {{-- <p class="hidden">{{ $stylist->description }}</p> --}}
                    <h5 class="hidden">experience: {{ $stylist->experience }}</h5>
                    <a href="/{{ $stylist->slug }}" class="btn btn-dark mt-3 hidden">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

