@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
<div class="container">
    <h1 class="mt-4">Create Building</h1>

    <!-- Display success or error messages -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buildings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Building Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="department_id" class="form-label">Department</label>
            <select class="form-select" id="department_id" name="department_id" required>
                <option value="">Select a Department</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Building</button>
        <a href="{{ route('buildingdash') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
