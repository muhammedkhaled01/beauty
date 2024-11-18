@extends('admin.layouts.layout')

@section('content')
    @include('admin.layouts.sidebar')


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        @include('admin.layouts.navbar')

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <a href="{{ route('admin.users.index') }}" class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">Manage Users</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{ route('admin.packages.index') }}" class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">Manage Packages</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{ route('admin.orders.index') }}" class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">Manage Orders</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
