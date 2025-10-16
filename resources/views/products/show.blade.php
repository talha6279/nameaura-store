@extends('admin.layout')

@section('content')


<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Menu Item</h3>
            <a href="{{ route('product.add') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped  table-responsive col-12">
    <thead>
        <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Discounted Price</th>
                    <th>Color</th>
                    <th>SKU</th>
                    <th>Availability</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Picture 1</th>
                    <th>Picture 2</th>
                    <th>Actions</th>
                    <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $products)
        <tr>
            <td>{{ $products->item_id }}</td>
            <td>{{ $products->itemname }}</td>
            <td>{{ $products->detail }}</td>
            <td>${{ number_format($products->price, 2) }}</td>
            <td>${{ number_format($products->discounted_price, 2)  }}</td>
            <td>{{ $products->color }}</td>
            <td>{{ $products->sku }}</td>
            <td>{{ $products->availability }}</td>
            <td>{{ $products->description }}</td>
            <td>
                @if($products->picture)
                    <img src="{{ asset($products->picture) }}" alt="{{ $products->itemname }}" width="100" height="80" style="border-radius: 50%">
                @else
                    No image available
                @endif
            </td>
            <td>
                @if($products->picture1)
                    <img src="{{ asset($products->picture1) }}" alt="{{ $products->itemname }}" width="100" height="80" style="border-radius: 50%">
                @else
                    No image available
                @endif
            </td>
            <td>
                @if($products->picture2)
                    <img src="{{ asset($products->picture2) }}" alt="{{ $products->itemname }}" width="100" height="80" style="border-radius: 50%">
                @else
                    No image available
                @endif
            </td>
            
            <td>
                <a href="{{ route('product.edit', $products->item_id) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{ route('product.delete', $products->item_id) }}" class="btn btn-sm btn-danger">Trash</a>
            </td>
        </tr>

        {{-- <tr>
            <td colspan="6" class="text-center">No menu items found.</td>
        </tr> --}}
        @endforeach
    </tbody>
</table>
{{ $product->links('pagination::bootstrap-5') }}

@endsection
