@extends('admin.layout')
@section('content')

<h3>Update Product Category</h3>
    <form action="{{ route('category.update', $category->category_id  ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Category</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}"
                placeholder="Enter product category " />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <p>Existing Picture</p>
        <img src="{{ asset('uploads/products/categories/' . $category->picture) }}" height="150" width="150" alt="{{ $category->name }}">
        <div class="mb-3">
            <label class="form-label">Update Product Category Picture</label>
            <input class="form-control" type="file" name="picture" />
            @error('picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Product Category</button>
        </div>
    </form>
@endsection