@extends('layouts.app')
  
{{-- @section('title', 'Edit Product') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
    <hr />
    <form action="{{ route('products_out.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="mb-3 form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                @foreach($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="row">
            <div class="col-xl-12">
                <button class="btn btn-warning">Update <i class="fas fa-edit"></i></button>
            </div>
        </div>
    </form>
@endsection