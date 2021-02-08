@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-2">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="First name">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Last name">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="profession" value="{{ old('profession', $user->profession) }}" placeholder="Profession">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary mb-3">Update user</button>
                </div>
            </form>
            <br />
            @if($errors->any())
            <div class="alert alert-warning" role="alert">
                <p><strong>Favor corregir los siguientes errores: </strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection