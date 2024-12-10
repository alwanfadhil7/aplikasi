<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Menampilkan halaman utama dengan daftar pengguna.
     */
    public function index()
    {
        // Mengambil semua data pengguna menggunakan prepared statement
        $users = DB::select('select * from users');
        return view('home', compact('users'));
    }

    /**
     * Menyimpan data pengguna baru.
     */
    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Menyimpan data pengguna baru menggunakan prepared statement
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', [
            $request->name,
            $request->email,
            bcrypt($request->password),
        ]);

        return redirect()->route('home')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit pengguna.
     */
    public function edit(User $user)
    {
        // Mengambil semua data pengguna menggunakan prepared statement
        $users = DB::select('select * from users');
        return view('home', compact('users', 'user'));
    }

    /**
     * Mengupdate data pengguna.
     */
    public function update(Request $request, User $user)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        // Mengupdate data pengguna menggunakan prepared statement
        DB::update('update users set name = ?, email = ? where id = ?', [
            $request->name,
            $request->email,
            $user->id,
        ]);

        return redirect()->route('home')->with('success', 'Pengguna berhasil diupdate.');
    }

    /**
     * Menghapus data pengguna.
     */
    public function destroy(User $user)
    {
        // Menghapus data pengguna menggunakan prepared statement
        DB::delete('delete from users where id = ?', [$user->id]);
        return redirect()->route('home')->with('success', 'Pengguna berhasil dihapus.');
    }

    /**
     * Menampilkan halaman dashboard.
     */
    public function dashboard()
    {
        // Mengambil semua data pengguna menggunakan prepared statement
        $users = DB::select('select * from users');
        return view('dashboard', compact('users'));
    }
}
