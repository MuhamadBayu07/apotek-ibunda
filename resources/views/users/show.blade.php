@extends('layouts.app')

@section('title', 'Show User')

@section('contents')
<h1 class="mb-0">Detail User</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $user->phone }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Address</label>
        <textarea class="form-control" name="address" placeholder="Address" readonly>{{ $user->address }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $user->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $user->updated_at }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3 text-center">
        <label class="form-label">Profile Photo</label><br>
        @if ($user->foto)
            <!-- Tampilkan foto jika ada -->
            <img src="{{ asset('storage/img-user/' . $user->foto) }}" 
                 alt="Profile Photo of {{ $user->name }}" 
                 class="rounded-circle mb-3" width="150" height="150">
        @else
            <!-- Tampilkan foto default jika tidak ada -->
            <img src="{{ asset('images/default.png') }}" 
                 alt="Default Profile Photo" 
                 class="rounded-circle mb-3" width="150" height="150">
        @endif
    </div>
</div>
@endsection
