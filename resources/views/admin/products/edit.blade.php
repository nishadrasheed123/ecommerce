@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>
                    <a href="{{ route('product.list') }}" class="btn btn-secondary float-right">Back to Product List</a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select id="category" name="category_id" class="form-control" required>
                                <option value="" disabled>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select id="status" name="status" class="form-control" required>
                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>In Stock</option>
                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Out of Stock</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image:</label>
                            <input type="file" id="image" name="image" class="form-control">
                            <p>Current Image:</p>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Current Product Image" style="width: 100px; height: auto;">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
