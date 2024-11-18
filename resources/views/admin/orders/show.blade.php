@extends('admin.layouts.layout')

@section('content')
    @include('admin.layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        @include('admin.layouts.navbar')

        <div class="container-fluid py-4">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Order Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>User:</strong> {{ $order->user->name }}</p>
                    <p><strong>Email:</strong> {{ $order->user->email }}</p>
                    <p><strong>Phone:</strong> {{ $order->user->phone }}</p>
                    <p><strong>Package:</strong> {{ $order->package->name }}</p>
                    <p><strong>Status:</strong>
                        <span
                            class="badge bg-{{ $order->status == 'approved' ? 'success' : ($order->status == 'rejected' ? 'danger' : 'warning') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </p>
                    <p><strong>Created At:</strong> {{ $order->created_at->format('d-m-Y H:i') }}</p>
                    <p><strong>Updated At:</strong> {{ $order->updated_at->format('d-m-Y H:i') }}</p>

                    @if ($order->status == 'pending')
                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="approved">
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    @endif
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
                </div>
            </div>
        </div>
    </main>
@endsection
