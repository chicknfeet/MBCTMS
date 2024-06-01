@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Drivers List</h2>

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
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Phone NO.</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->id }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->gender }}</td>
                        <td>{{ $driver->age }}</td>
                        <td>{{ $driver->email }}</td>
                        <td>{{ $driver->phone}}</td>
                        <td>{{ $driver->address}}</td>
                        <td>
                            <a href="{{ route('showDriver', $driver->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('updateDrivers', $driver->id) }}" class="btn btn-warning">Update</a>
                            <form method="post" action="{{ route('deleteDrivers', $driver->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @if ($drivers->lastPage() > 1)
            <ul class="pagination">
                <!-- Previous Page Link -->
                @if ($drivers->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link" aria-hidden="true">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $drivers->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @for ($i = 1; $i <= $drivers->lastPage(); $i++)
                    @if ($i == $drivers->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $drivers->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endfor

                <!-- Next Page Link -->
                @if ($drivers->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $drivers->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link" aria-hidden="true">&raquo;</span>
                    </li>
                @endif
            </ul>
        @endif
    </div>
@endsection

@section('title')
    Drivers
@endsection