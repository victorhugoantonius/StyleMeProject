
@extends('master')

@section('content')
{{--
         <h1 class="tetx-center">Name: {{ Auth::User()->name }}</h1>
        <h1 class="tetx-center">Email: {{ Auth::User()->email }}</h1>
        <h1 class="tetx-center">Gender: {{ Auth::User()->gender }}</h1>
        <h1 class="tetx-center">DOB: {{ Auth::User()->DOB }}</h1>
        <h1 class="tetx-center">Country: {{ Auth::User()->country }}</h1> --}}

    <div class="container">
  <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Your Profile</h2>
  <div class="container1">
      <form action="" method="POST">
        <input type="text" name="name"
        placeholder="Name" class="box1" value="{{ Auth::User()->name }}">
        <input type="text" name="email"
        placeholder="Email" class="box1" value="{{ Auth::User()->email }}">
        <input type="text" name="gender"
        placeholder="Gender" class="box1" value="{{ Auth::User()->gender }}">
        <input type="text" name="country"
        placeholder="Country" class="box1" value="{{ Auth::User()->country }}">

        {{-- <input type="submit" name="submit" class="btn"> --}}
      </form>
  </div>
</div>


@endsection
