@extends('layouts.app')

@section('title', 'Membuat User Baru')

@section('contents')
<h1 class="mb-0">Tambah User</h1>
<hr />
<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="col">
            <textarea class="form-control" name="address" placeholder="Alamat"></textarea>
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
    </div>
     <!-- Save Profile and Change Photo Section -->
     <div class="row mt-5 align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ auth()->user()->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : asset('images/default.png') }}"
                class="rounded-circle mb-3" width="150" height="150" alt="Profile Photo">
            <div>
                <label class="btn btn-outline-primary">
                    Change Photo
                    <input type="file" name="foto" class="form-control" style="display: none;">
                </label>
            </div>
        </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection