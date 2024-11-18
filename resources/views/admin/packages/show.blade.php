@extends('admin.layouts.layout')

@section('content')
    @include('admin.layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        @include('admin.layouts.navbar')

        <div class="container-fluid py-4">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Package Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $package->name }}</p>
                    <p><strong>Price:</strong> ${{ $package->price }}</p>
                    <p><strong>Number of Visits:</strong> {{ $package->number_of_visits }}</p>
                    <p><strong>Start Date:</strong> {{ $package->start_date }}</p>
                    <p><strong>End Date:</strong> {{ $package->end_date }}</p>
                    <a href="{{ route('admin.packages.index') }}" class="btn btn-secondary">Back to Packages</a>
                </div>
            </div>
        </div>
    </main>
@endsection
