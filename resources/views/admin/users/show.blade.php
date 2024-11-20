@extends('admin.layouts.layout')

@section('content')
    @include('admin.layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        @include('admin.layouts.navbar')

        <div class="container-fluid py-4">
            <div class="card shadow">
                <div class="card-header">
                    <h4>User Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>City:</strong> {{ $user->city ?? 'Not Provided' }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone ?? 'Not Provided' }}</p>
                    <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge bg-{{ $user->is_active ? 'success' : 'danger' }}">
                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                    <p><strong>Created At:</strong> {{ optional($user->created_at)->format('d-m-Y H:i') }}</p>
                    <p><strong>Updated At:</strong> {{ optional($user->updated_at)->format('d-m-Y H:i') }}</p>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users</a>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
                </div>
            </div>
        </div>
    </main>
@endsection
