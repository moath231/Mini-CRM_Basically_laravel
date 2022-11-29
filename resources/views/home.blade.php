@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Company') }}</div>
                <a href="/company/create" class="btn btn-success createNewCompany m-3">Create New Company</a>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">{{ __('Company List') }}</div>

                        <div class="card-body">
                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            {{-- Dmessage --}}
                            @if (session('Dmessage'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('Dmessage') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead class="">
                                    <thead class="">
                                        <tr class="table-secondary">
                                            <th scope="col">logo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">address</th>
                                            <th scope="col">website</th>
                                            <th scope="col">email</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($company as $comp)
                                            <tr>
                                                <td scope="col" class="imglogo">
                                                    <img class="" src="/images/{{ $comp['logo_path'] }}" alt="">
                                                </td>
                                                <td scope="col" class="pt-4">{{ $comp['name'] }}</td>
                                                <td scope="col" class="pt-4">{{ $comp['Address'] }}</td>
                                                <td scope="col" class="pt-4"><a class="text-primary" href="{{ $comp['website'] }}">{{ $comp['name'] }}</a></td>
                                                <td scope="col" class="pt-4">{{ $comp['Email'] }}</td>
                                                <td scope="col" class="buttomde pt-3 pb-3">
                                                    <a href="/company/{{ $comp['id'] }}/edit" class="btn btn-success" role="button" aria-disabled="true">edit</a>
                                                    <form
                                                    class=""
                                                    action="/company/{{ $comp['id'] }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button class="btn btn-danger" role="button" aria-disabled="true">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
