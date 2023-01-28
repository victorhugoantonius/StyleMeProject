@extends('master')

@section('content')

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-5 fw-normal text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Log in</h1>
    <form action="/login" method="post">
        @csrf
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')
            is-invalid
        @enderror" id="email" placeholder="name@example.com" autofocus value="{{ Cookie::get('user') !== null ? Cookie::get('user') : ''}}">
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-dark mb-5" type="submit">Login</button>
    </form>
  </main>

@endsection
