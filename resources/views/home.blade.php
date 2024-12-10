@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Website Dashboard</h1>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tampilkan Form Tambah/Edit --}}
    <div class="card mb-4">
        <div class="card-body">
            @if(isset($user))
            <h4>Edit Pengguna</h4>
            <form action="{{ route('home.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                @else
                <h4>Tambah Pengguna</h4>
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email ?? '' }}" required>
                    </div>
                    @if(!isset($user))
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update' : 'Simpan' }}</button>
                    @if(isset($user))
                    <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>
                    @endif
                </form>
        </div>
    </div>

    {{-- Tampilkan Daftar Pengguna --}}
    <h4>Daftar Pengguna</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $userItem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $userItem->name }}</td>
                <td>{{ $userItem->email }}</td>
                <td>
                    <a href="{{ route('home.edit', $userItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('home.destroy', $userItem->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection