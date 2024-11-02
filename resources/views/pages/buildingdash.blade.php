@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
    @include('components.include.adminnavbar')  <!-- Include the admin navbar -->
    @include('components.include.adminsidebar') 
    <div class="container mt-5">
        <div class="row">
        @include('components.include.building-cards', ['buildings' => $buildings])
        <!-- Correctly pass the buildings collection -->
        </div>
    </div>
@endsection
