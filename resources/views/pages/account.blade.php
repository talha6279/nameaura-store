@extends('layout')
@section('content')
    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->
 
<div class="container my-5">
    <h2 class="fw-bold mb-4">Revenue Management</h2>

    <!-- Add Record -->
    <form action="{{ route('revenue.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Name / Description" required>
            </div>
            <div class="col-md-3">
                <select name="type" class="form-control" required>
                    <option value="profit">Profit</option>
                    <option value="expense">Expense</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" step="0.01" name="amount" class="form-control" placeholder="Amount" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Add</button>
            </div>
        </div>
    </form>

    <!-- Totals -->
    <div class="mb-4">
        <h5>Total Profit: <span class="text-success">{{ $totalProfit }}</span></h5>
        <h5>Total Expense: <span class="text-danger">{{ $totalExpense }}</span></h5>
        <h4>Total Gain: <span class="fw-bold text-dark">{{ $totalGain }}</span></h4>
    </div>

    <!-- Records Table -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($revenues as $rev)
            <tr>
                <td>{{ $rev->name }}</td>
                <td>
                    @if($rev->type == 'profit')
                        <span class="badge bg-success">Profit</span>
                    @else
                        <span class="badge bg-danger">Expense</span>
                    @endif
                </td>
                <td>{{ $rev->amount }}</td>
                <td>{{ $rev->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
