@extends('master')

@section('content')


     <div class="container">
         <div class="ab">
              <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid2" alt="...">
               <div class="col-md-8">
               {{-- <h1>ini halaman single product</h1> --}}
               <br>
               <div class="detail2">
                   <h4>Category: <a href="/?category={{ $product->category->slug }}">{{ $product->category->name }}</a></h4>
                   <h4>Name: {{ $product->name }}</h4>
                   <h4>Price: Rp. {{ $product->price }}</h4>
               </div>
               <h4 class="detail">Details: {{ $product->full_description }}</h4>
               @if (Auth::user())
                    @if (Auth::user()->role == 'customer')
                         <form action="/{{ $product->slug }}" method="post">
                              @csrf
                              <div class="mb-3 p-2">
                                   <label for="quantity" class="form-label">Quantity</label>
                                   <input type="number" id="quantity" name="quantity" class="@error('quantity')
                                       is-invalid
                                   @enderror">
                                   @error('quantity')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror

                              </div>
                                   <button class="w-100 btn btn-lg btn-dark mb-3 p-2" type="submit">add to cart</button>
                         </form>
                    @endif
               @endif

              <h5 class="home">
               <a href="/">Back to home</a>
               </h5>
               </div>
          </div>
     </div>

@endsection
