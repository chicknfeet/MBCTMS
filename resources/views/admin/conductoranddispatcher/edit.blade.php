@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Edit Patient</h2>
        <form method="post" action="{{ route('updateRecords', [$records->id, $record->id]) }}">

            @csrf
            @method('GET')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $record->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $record->email) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Record</button>
            
        </form>

        <a href="{{ route('showRecord', $records->id) }}" class="btn btn-secondary mt-3">Back to View Records</a>
    </div>
@endsection
