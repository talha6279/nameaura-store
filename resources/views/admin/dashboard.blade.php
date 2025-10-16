@extends('admin.layout')

@section('content')
    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row g-3">
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4>120</h4>
                    <p class="mb-0">Products</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4>85</h4>
                    <p class="mb-0">Orders</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4>30</h4>
                    <p class="mb-0">Users</p>
                </div>
            </div>
        </div>
    </div>
@endsection
