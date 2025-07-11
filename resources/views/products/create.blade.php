@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<h1 class="mb-0">Add Product</h1>
<hr />
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label>Photo</label><br>
    
        {{-- Cek apakah foto produk ada --}}
        @if (isset($product) && $product->foto)
            <img src="{{ asset('storage/product_photos/' . $product->foto) }}" alt="Product Photo" width="100" class="mb-2">
        @else
            <img src="{{ asset('default-product.png') }}" alt="Default Photo" width="100">
        @endif
    
        {{-- Input untuk upload file foto --}}
        <input type="file" name="foto" class="form-control-file">
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection