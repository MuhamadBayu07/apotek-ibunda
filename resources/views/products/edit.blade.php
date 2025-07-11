@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h1 class="mb-0">Edit Product</h1>
<hr />
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product Code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <!-- Menampilkan Foto Produk -->
{{-- <div class="row">
    <div class="col mb-3">
        <label class="form-label">Product Photo</label><br>
        @if ($product->foto)
            <img src="{{ asset('storage/product_photos/' . $product->foto) }}" alt="Product Photo" class="img-thumbnail" width="200">
        @else
            <img src="{{ asset('default-product.png') }}" alt="Default Photo" class="img-thumbnail" width="200">
        @endif
    </div>
</div> --}}
            {{-- <label>Photo</label><br> --}}
        
            {{-- Cek apakah foto produk ada --}}
            {{-- @if (isset($product) && $product->foto)
                <img src="{{ asset('storage/product_photos/' . $product->foto) }}" alt="Product Photo" width="100" class="mb-2">
            @else
                <img src="{{ asset('default-product.png') }}" alt="Default Photo" width="100">
            @endif
         --}}
            {{-- Input untuk upload file foto --}}
            {{-- <input type="file" name="foto" class="form-control-file">
        </div> --}}
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection