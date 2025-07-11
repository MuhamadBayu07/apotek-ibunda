@extends('layouts.app')


@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Daftar User</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            {{-- <th>Addres</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @forelse($users as $user)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $user->name }}</td>
            <td class="align-middle">{{ $user->email }}</td>
            <td class="align-middle">{{ $user->phone }}</td>
            {{-- <td class="align-middle">{{ $user->addres }}</td> --}}
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('users.show', $user->id) }}" type="button" class="btn btn-primary">Detail</a>
                    <i></i>
                    <a href="{{ route('users.edit', $user->id)}}" type="button" class="btn btn-success">Edit</a>
                    <i></i>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah Kamu Yakin Ingin Menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        {{-- <tr>
            <td class="text-center" colspan="5">User not found</td>
        </tr> --}}
    </tbody>
</table>
@endsection