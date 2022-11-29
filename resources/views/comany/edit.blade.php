@extends('layouts.app')

@section('content')
  <form
    class="row g-3 container m-auto"
    action="/company/{{ $company['id'] }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{ $company['name'] }}">
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
      </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="Email" value="{{ $company['Email'] }}">
      @error('Email')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address" value="{{ $company['Address'] }}">
      @error('Address')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">website</label>
      <input type="text" class="form-control" id="inputCity" name="website" value="{{ $company['website'] }}">
      @error('website')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success">update</button>
    </div>
  </form>
@endsection
