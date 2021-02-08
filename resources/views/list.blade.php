@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-hover mt-3">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th class="text-center" scope="col">First name</th>
                <th class="text-center" scope="col">Last name</th>
                <th class="text-center" scope="col">Profession</th>
                <th class="text-center" scope="col">Edit</th>
                <th class="text-center" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="text-center">
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->profession }}</td>
                <td><a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ route('delete', $user->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection