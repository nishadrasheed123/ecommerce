
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
    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header">
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
                   <option value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
               
                    
                
                </select>
              </div>

              <div class="form-group">
                <label for="size">Size</label>
                <select class="form-control" id="size" name="size">
                  <option value="" disabled selected>Select Size</option>
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                  <option value="XXXL">XXXL</option>
                </select>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" required>
              </div>

              <div class="form-group">
                <label>Sex</label><br>
                <input type="radio" name="sex" value="Male" required> Male
                <input type="radio" name="sex" value="Female" required> Female
              </div>

              <div class="form-group">
                <label for="image">Product Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description"></textarea>
              </div>

              <div class="form-group">
                <label>Status</label><br>
                <input type="radio" name="status" value="1" checked> In Stock
                <input type="radio" name="status" value="0"> Stock Out
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isFavorite" name="is_favorite">
                <label class="form-check-label" for="isFavorite">Mark as Favorite</label>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

  
@endsection