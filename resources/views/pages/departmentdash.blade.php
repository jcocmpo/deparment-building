@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
    @include('components.include.adminnavbar')  <!-- Include the admin navbar -->
    @include('components.include.adminsidebar')  <!-- Include the admin sidebar -->

    <div class="container mt-5">
        <div class="row">
            @include('components.include.department-cards', ['departments' => $departments])  <!-- Pass departments to the cards -->
        </div>
    </div>
@endsection
