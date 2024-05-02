@extends('layouts.app')
  
{{-- @section('title', 'Create Product') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>
    <hr />
    <form action="{{ route('products_out.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
         
        <div class="mb-3 form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                @foreach($categories as $value => $category)
                    <option value="{{ $value }}">{{ $category }}</option>
                @endforeach
            </select>
        </div>            
        
        <div class="row">
            <div class="col-xl-12">
                <button type="submit" class="btn btn-success">Submit <i class="fas fa-save"></i></button>
            </div>
        </div>
    </form>
@endsection