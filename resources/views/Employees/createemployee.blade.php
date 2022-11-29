@extends('layouts.app')

@section('content')
    <h1 class="container text-center">create new Employee</h1>
    <form
        class="row g-3 container m-auto"
        action="/employees"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">firstName</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            @error('firstName')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">lastName</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
            @error('lastName')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">phone</label>
            <input type="phone" class="form-control" id="phone" name="phone">
            @error('phone')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="Company" class="form-label">Company</label>
            <select class="form-select" aria-label="Default select example" name="Company" id="Company">
                @foreach ($company as $comp)
                <option value="{{ $comp->id }}">{{ $comp->name }}</option>
                @endforeach
            </select>
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
