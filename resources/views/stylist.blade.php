@extends('master')

@section('content')


     <div class="container">
            <div class="row justify-content-center">
                <img src="{{ asset('storage/' . $stylist->photo) }}" class="img-fluid" alt="...">
                 <div class="col-md-8">
                 {{-- <h1>ini halaman single product</h1> --}}
                 <br>
                 <div class="detail2">
                     <h4>Name: {{ $stylist->name }}</h4>
                     <h4>Rate: {{ $stylist->rate }}</h4>
                     <h4>Experience: {{ $stylist->experience }}</h4>
                 </div>
                 <h4 class="detail">About: {{ $stylist->description }}</h4>
                 @if (Auth::user())
                      @if (Auth::user()->role == 'customer')
                           <form action="/{{ $stylist->slug }}" method="post">
                                @csrf

                                <div class="form-floating p-2">
                                  <label for="bookingdate" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                                  font-size: 20px">Choose Booking Date</label>
                                  <br>
                                  <br>
                                  <input type="date" name="bookingdate" class="form-control w-100 @error('bookingdate')
                                  is-invalid
                                  @enderror" id="bookingdate" placeholder="">
                                  @error('bookingdate')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <div class="checkbox mb-3 p-2" style="display:flex; flex-direction:row; gap:10px; margin:4px; padding:3px; 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                                font-size: 20px; font-family: 'Franklin Gothic Medium'; background: white; border: 2px solid black;
                                  box-shadow: 1px 1px 2px black; border-radius: 10px;">
                                  Choose Time
                                  <br>
                                  <input type="radio" id="time1" class="@error('time')
                                  is-invalid
                                  @enderror" name="time" value="13:00 - 14:30" checked>
                                  <label for="time1">13:00 - 14:30</label><br>
                                  <input type="radio"  id="time2"class="@error('time')
                                  is-invalid
                                  @enderror" name="time" value="15:00 - 16:30">
                                  <label for="time2">15:00 - 16:30</label><br>
                                  <input type="radio" id="time3" class="@error('time')
                                  is-invalid
                                  @enderror" name="time" value="17:00 - 18:30">
                                  <label for="time3">17:00 - 18:30</label><br>
                                  @error('time')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror

                            </div>
                                     <button class="w-100 btn btn-lg btn-dark mb-4 p-2" type="submit">Add to Checkout</button>
                           </form>
                      @endif
                 @endif

                {{-- <h5>
                 <a href="/">Back to home</a>
                 </h5> --}}
                 </div>
            </div>
     </div>

@endsection
