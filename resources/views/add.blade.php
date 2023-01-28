@extends('master')

@section('content')

    <a href="/manageproduct" class="btn btn-dark mt-3">Back</a>
<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Add Product</h1>
    <form action="{{ route('add') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name')
            is-invalid
        @enderror" id="name" placeholder="name@example.com" autofocus value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3 mt-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select @error('category_id')
        is-invalid
        @enderror" name="category_id" >
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach 
          </select>
          @error('category_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="slug" class="form-control @error('slug')
            is-invalid
        @enderror" id="slug" placeholder="slug@example.com" autofocus value="{{ old('slug') }}">
        <label for="slug">Slug</label>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <small>slug is the product name with lowercase and dash. Example: azarine-cleansing-oil</small>
      <br>
      <br>
      <div class="mb-3">
        <label for="full_description" class="form-label @error('full_description')
        is-invalid
        @enderror">Full Description</label>
        <textarea class="form-control" id="full_description" rows="3" name="full_description"></textarea>
        @error('full_description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
         @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label @error('price')
        is-invalid
         @enderror">Price</label>
        <input type="number" id="price" name="price">
        @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="image" class="form-label @error('image')
        is-invalid
         @enderror">Product Image</label>
        <input class="form-control" type="file" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      
      
      <button class="w-100 btn btn-lg btn-dark" type="submit">Add Product</button>
      <br>
      <br>
    </form>
  </main>
  
@endsection

