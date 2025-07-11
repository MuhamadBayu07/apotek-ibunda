@extends('layouts.app')

@section('title', 'Edit User')

@section('contents')
<h1 class="mb-0">Edit User</h1>
<hr />
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $user->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->addres }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $user->phone }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Addres</label>
            <textarea class="form-control" name="address" placeholder="Addres">{{ $user->addres }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection