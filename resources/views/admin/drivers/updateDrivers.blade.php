@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Edit Record</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('updatedDrivers', $driver->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Driver Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $driver->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $driver->gender) }}" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $driver->age) }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{  old('email', $driver->email) }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone NO</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{  old('phone', $driver->phone) }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{  old('address', $driver->address) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@section('title')
    Update Driver
@endsection