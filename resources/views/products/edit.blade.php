@extends('admin.layout')

@section('content')

    <h2>Update Product</h2>
    <form action="{{ route('product.update', $product->item_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Product Name Field -->
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="itemname" value="{{ $product->itemname }}"
                placeholder="Enter product name" />
            @error('itemname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Detail Field -->
        <div class="mb-3">
            <label class="form-label">Short Product Detail</label>
            <input class="form-control" name="detail" placeholder="Enter product details" value="{{ $product->detail }}">
            @error('detail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="mb-3 col-md-6">
                <label class="form-label">Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input class="form-control" type="number" step="0.01" name="price"
                        value="{{ old('price', $product->price) }}" placeholder="Enter price" />
                </div>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
 <!-- sku Field -->
 <div class="mb-3 col-md-6">
            <label class="form-label">SKU</label>
            <input class="form-control" type="text" name="sku" placeholder="Enter sku" value="{{ $product->sku }}"></input>
            @error('sku')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Discounted Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input class="form-control" type="number" step="0.01" name="discounted_price"
                        value="{{ old('discounted_price', $product->discounted_price) }}" placeholder="Enter discounted price" />
                </div>
                @error('discounted_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

       

        <!-- Color Field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Color</label>
            <input class="form-control" type="text" name="color" value="{{ $product->color }}"
                placeholder="Enter product color" />
            @error('color')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
<!-- availability Field -->
<div class="mb-3 col-md-6">
            <label class="form-label">Availability/in stock or not</label>
            <input class="form-control" type="text" name="availability" placeholder="Enter availability" value="{{ $product->availability }}"></input>
            @error('availability')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Enter product description">{{ $product->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div class="row">
            <!-- Existing Pictures -->
            <div class="col-md-3">
                <p>Existing Pictures</p>
                <img src="{{ asset($product->picture) }}" alt="Product Picture" width="100" height="100"
                    style="border-radius: 50%" />
                <img src="{{ asset($product->picture1) }}" alt="Product Picture 1" width="100" height="100"
                    style="border-radius: 50%" />
                <img src="{{ asset($product->picture2) }}" alt="Product Picture 2" width="100" height="100"
                    style="border-radius: 50%" />
                
            </div>

            <!-- Picture Upload Fields -->
            <div class="mb-3 col-md-9">
                <label class="form-label">Update Product Pictures</label>
                <input class="form-control mb-2" type="file" name="picture" />
                <input class="form-control mb-2" type="file" name="picture1" />
                <input class="form-control mb-2" type="file" name="picture2" />
                @error('picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('picture1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('picture2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Product</button>
        </div>
    </form>
@endsection
