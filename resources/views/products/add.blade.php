@extends('admin.layout')
@section('content')
    <h2>Add Product</h2>
    <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Item Name Field -->
        <div class="mb-3">
            <label class="form-label">Item Name</label>
            <input class="form-control" type="text" name="itemname" value="{{ old('itemname') }}"
                placeholder="Enter product name" />
            @error('itemname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Detail Field -->
        <div class="mb-3">
            <label class="form-label">Short Product Detail</label>
            <input class="form-control" name="detail" placeholder="Enter product details" value="{{ old('detail') }}"></input>
            @error('detail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rs.</span>
                        <input class="form-control" type="number" step="0.1" name="price"
                            value="{{ old('price') }}" placeholder="Enter product price" />
                    </div>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- sku Field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">SKU</label>
            <input class="form-control" name="sku" placeholder="Enter sku" value="{{ old('sku') }}"></input>
            @error('sku')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Discounted Price Field -->
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Discounted Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rs.</span>
                        <input class="form-control" type="number" step="0.1" name="discounted_price"
                            value="{{ old('discounted_price') }}" placeholder="Enter discounted product price" />
                    </div>
                    @error('discounted_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            <!-- Product Category Field -->
            <div class="mb-3 col-md-6">
                <label class="form-label">Product Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Product Category</option>

                    @foreach ($product as $products)
                        <option value="{{ $products->category_id }}" {{ old('category_id') == $products->category_id ? 'selected' : '' }}>
                            {{ $products->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Product Description</label>
            <input class="form-control" name="description" placeholder="Enter product description" value="{{ old('description') }}"></input>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Color Field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Product Colors</label>
            <input class="form-control" name="color" placeholder="Enter product colors" value="{{ old('color') }}"></input>
            @error('color')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
         <!-- availability Field -->
         <div class="mb-3 col-md-6">
            <label class="form-label">Availability/in stock or not</label>
            <input class="form-control" name="availability" placeholder="Enter availability" value="{{ old('availability') }}"></input>
            @error('availability')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field -->
        <div class="mb-3">
            <label class="form-label">Product Picture</label>
            <input class="form-control" type="file" name="picture" />
            @error('picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field 1 -->
        <div class="mb-3">
            <label class="form-label">Product Picture Nullable</label>
            <input class="form-control" type="file" name="picture1" />
            @error('picture1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field 2-->
        <div class="mb-3">
            <label class="form-label">Product Picture Nullable</label>
            <input class="form-control" type="file" name="picture2" />
            @error('picture2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <!-- Submit Button -->
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Add Product</button>
        </div>
    </form>
@endsection
