@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="#" method="POST">
                <div class="mb-2">
                    <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="profession" placeholder="Profession">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary mb-3">Create user</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection