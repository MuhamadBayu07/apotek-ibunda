@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
{{-- <h1 class="mb-0">Profile</h1>
<hr /> --}}
{{-- Flash Message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">

                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address">
                    </div>
                </div>
                   {{-- <!-- Save Profile and Change Photo Section -->
                   <div class="row mt-5 align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ auth()->user()->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : asset('images/default.png') }}"
                            class="rounded-circle mb-3" width="150" height="150" alt="Profile Photo">
                        <div>
                            <label class="btn btn-outline-info">
                                Change Photo
                                <input type="file" name="foto" class="form-control" style="display: none;">
                            </label>
                        </div>
                    </div> --}}
<form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('profile.update') }}">
    @csrf
    <!-- Form fields -->
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>

    </div>

</form>
@endsection