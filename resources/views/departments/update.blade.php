@extends('layout.layout')

@section('content')
    <h1>Edit Department</h1>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" value="{{ $department->image }}" placeholder="Image URL">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" value="{{ $department->description }}" placeholder="Description">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Department</button>
        </div>
    </form>
@endsection
