@extends('admin.layouts.layout')

@section('content')
@include('admin.layouts.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    @include('admin.layouts.navbar')

    <div class="container-fluid py-4">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Manage Packages</h4>
                <a href="{{ route('admin.packages.create') }}" class="btn btn-primary">Add New Package</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Visits</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{ $package->id }}</td>
                                <td>{{ $package->name }}</td>
                                <td>${{ $package->price }}</td>
                                <td>{{ $package->number_of_visits }}</td>
                                <td>{{ $package->start_date }}</td>
                                <td>{{ $package->end_date }}</td>
                                <td>
                                    <a href="{{ route('admin.packages.show', $package->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
