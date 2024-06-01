@extends('layout.admin')

@section('content')
    <div class="container"> 

        <h2>Record for {{ $records->name }}</h2>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>ID: {{ $drivers->id }}</th>
                    <th>Name: {{ $drivers->name }}</th>
                    <th>Gender: {{ $drivers->gender }}</th>
                    <th>Email: {{ $drivers->email }}</th>
                    <th>Phone NO: {{ $drivers->phoneno }}</th>
                    <th>Address: {{ $drivers->address }}</th>
                </tr>
            </thead>
        </table>
        

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('addDrivers', $drivers->id) }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Patient Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone NO</label>
                <input type="number" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            @csrf
            <input type="hidden" name="record" value="{{ $records->id }}">
            <button type="button" class="btn btn-primary">Add Record</button>
            
        </form>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Phone NO.</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            @if(is_iterable($drivers) && count($drivers) > 0)
                @forelse ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->id }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->gender }}</td>
                        <td>{{ $driver->age }}</td>
                        <td>{{ $driver->email }}</td>
                        <td>{{ $driver->phone}}</td>
                        <td>{{ $driver->address}}</td>
                        <td>
                            <a href="{{ route('updateDrivers', [$drivers->id, $record->id]) }}" class="btn btn-warning">Edit record</a>
                            <form method="post" action="{{ route('deleteDrivers', [$drivers->id, $record->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this driver?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No drivers registered yet.</td>
                    </tr>
                @endforelse
            @endif
            </tbody>
        </table>

        <a href="{{ route('admin.drivers') }}" class="btn btn-secondary mt-3">Back to drivers</a>
    </div>
@endsection

@section('title')
    Drivers
@endsection