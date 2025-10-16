@extends('admin.layout')
@section('content')
<h2>Add Product Category</h2>
<form action="{{ route('category.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Product Category</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter product category" />
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label"> Product Category Picture</label>
        <input class="form-control" type="file" name="picture" />
        @error('picture')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Add Product Category</button>
    </div>
</form>


@endsection
