@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('save') }}" method="POST">
            @csrf
                <div class="mb-2">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First name">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last name">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="profession" value="{{ old('profession') }}" placeholder="Profession">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary mb-3">Create user</button>
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