@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Add Patient</h2>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
        <form method="post" action="{{ route('addRecord') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Driver Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Driver Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Driver</button>
        </form>
    </div>
@endsection