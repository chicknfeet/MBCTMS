@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Schedule List</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <button class="btn btn-primary">Add</button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Mariveles Time</th>
                    <th>Balanga Time</th>
                    <th>Balanga Time</th>
                    <th>Mariveles Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->marivelestime }}</td>
                        <td>{{ $schedule->balangatime }}</td>
                        <td>{{ $schedule->balangatimes }}</td>
                        <td>{{ $schedule->marivelestimes }}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('title')
    Schedule List
@endsection