<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Custom Card Styles */
    .card-custom {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: none;
    }

    /* Form Field Styling */
    .card-body .form-control {
      border-radius: 5px;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .card-body .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      outline: none;
    }

    /* Custom Header Styling */
    .card-header {
      background: #ffede9;
      color: #fff;
      padding: 15px;
      border-radius: 8px 8px 0 0;
    }

    /* Button Styles */
    .btn-primary {
      background: #007bff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: #0056b3;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
@extends('admin.layout.master')    
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Product</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-custom shadow-sm mt-4">
          <div class="card-header text-center">
            <h3 class="card-title">Product Information</h3>
          </div>
          <form action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" placeholder="Enter product name" required>
              </div>

              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id" required>
                  <option value="">Select Category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" required>
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description"></textarea>
              </div>

              <div class="form-group">
                <label for="productImage">Product Image</label>
                <input type="file" class="form-control" id="productImage" name="image" accept="image/*">
              </div>

              <div class="form-group">
                <label>Status</label><br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="statusInStock" name="status" value="1" class="custom-control-input" checked>
                  <label class="custom-control-label" for="statusInStock">In Stock</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="statusOutOfStock" name="status" value="0" class="custom-control-input">
                  <label class="custom-control-label" for="statusOutOfStock">Stock Out</label>
                </div>
              </div>
            </div>

            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

</body>
</html>
