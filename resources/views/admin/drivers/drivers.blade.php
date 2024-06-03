@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Driver List</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <button class="btn btn-primary">Add</button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Schedule</th>
                    <th>Route</th>
                    <th>Bus No.</th>
                    <th>Conductor</th>
                    <th>Dispatcher</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->id }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->age }}</td>
                        <td>{{ $driver->schedule }}</td>
                        <td>{{ $driver->route }}</td>
                        <td>{{ $driver->busno}}</td>
                        <td>{{ $driver->conductor}}</td>
                        <td>{{ $driver->dispatcher}}</td>
                        <td>{{ $driver->status }}</td>
                        <td>
                        <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this driver?')">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('title')
    Driver List
@endsection