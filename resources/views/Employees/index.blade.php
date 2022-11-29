@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employees') }}</div>
                <a href="/employees/create" class="btn btn-success createNewCompany m-3">Create New Employees</a>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">{{ __('Employees List') }}</div>

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
                                            <th scope="col">First name</th>
                                            <th scope="col">last name</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">email</th>
                                            <th scope="col">phone</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employee as $emp)
                                            <tr>
                                                <td scope="col" class="pt-4">{{ $emp['firstName'] }}</td>
                                                <td scope="col" class="pt-4">{{ $emp['lastName'] }}</td>
                                                <td scope="col" class="pt-4">{{ $emp->companyId }}</td>
                                                <td scope="col" class="pt-4">{{ $emp['email'] }}</td>
                                                <td scope="col" class="pt-4">{{ $emp['phone'] }}</td>
                                                <td scope="col" class="buttomde pt-3 pb-3">
                                                    <a href="/employees/{{ $emp['id'] }}/edit" class="btn btn-success" role="button" aria-disabled="true">edit</a>
                                                    <form
                                                    class=""
                                                    action="/employees/{{ $emp['id'] }}"
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
