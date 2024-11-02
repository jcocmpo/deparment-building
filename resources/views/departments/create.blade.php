@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <h2>Create Department</h2>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
       
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image" name="image" placeholder="https://example.com/image.jpg">
        </div>
        <button type="submit" class="btn btn-primary">Create Department</button>
    </form>
</div>
@endsection
