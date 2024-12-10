@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Website Dashboard</h1>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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