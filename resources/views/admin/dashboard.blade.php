@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Product Summary Cards -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \$totalProducts }}</h3>
                    <p>Total Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="{{ route('product.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ \$productsInStock }}</h3>
                    <p>In Stock</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="{{ route('product.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ \$productsOutOfStock }}</h3>
                    <p>Out of Stock</p>
                </div>
                <div class="icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <a href="{{ route('product.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <!-- Recent Products Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Products</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.dashboard') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\$recentProducts as \$product)
                                    <tr>
                                        <td><input type="checkbox" name="selected_products[]" value="{{ \$product->id }}"></td>
                                        <td>{{ \$product->id }}</td>
                                        <td>{{ \$product->name }}</td>
                                        <td>{{ \$product->category->name ?? 'N/A' }}</td>
                                        <td>\${{ number_format(\$product->price, 2) }}</td>
                                        <td>{{ \$product->status == 1 ? 'In Stock' : 'Out of Stock' }}</td>
                                        <td>
                                            <a href="{{ route('product.edit', \$product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('product.delete', \$product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-3">Apply Bulk Action</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
