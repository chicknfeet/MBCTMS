@extends('layout.passenger')

@section('content')
    <div class="container">
        <h2>Bus Info</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('title')
    Bus Info
@endsection