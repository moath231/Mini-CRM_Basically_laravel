@extends('layouts.app')

@section('content')
  <form
    class="row g-3 container m-auto"
    action="/company"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name">
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
      </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="Email">
      @error('Email')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
      @error('Address')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">website</label>
      <input type="text" class="form-control" id="inputCity" name="website">
      @error('website')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label for="formFile" class="form-label">upload logo</label>
        <input class="form-control" type="file" id="formFile" name="logo">
        @error('website')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">create</button>
    </div>
  </form>
@endsection
