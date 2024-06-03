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
                    <th>Bus No.</th>
                    <th>Driver</th>
                    <th>Departure
                        (BALANGA)
                    </th>
                    <th>Arrival
                        (MARIVELES)
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($checkpoints as $checkpoint)
                    <tr>
                        <td>{{ $checkpoint->id }}</td>
                        <td>{{ $checkpoint->busno }}</td>
                        <td>{{ $checkpoint->driver }}</td>
                        <td>{{ $checkpoint->departure }}</td>
                        <td>{{ $checkpoint->arrival }}</td>
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
Checkpoint Page
@endsection
