<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * Atribut yang dapat diisi massal (mass assignable) ketika membuat atau memperbarui model.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * Atribut yang harus disembunyikan ketika model diubah menjadi array atau JSON.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     * Atribut yang harus di-cast ke tipe tertentu saat diakses atau diubah.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime', // Cast 'email_verified_at' menjadi objek DateTime
            'password' => 'hashed', // Hash 'password' sebelum disimpan ke database
        ];
    }

    /**
     * Find a user by email using prepared statements.
     * Metode untuk mencari pengguna berdasarkan email menggunakan prepared statements.
     *
     * @param string $email
     * @return User|null
     */
    public static function findByEmail($email)
    {
        $user = DB::select('select * from users where email = ?', [$email]);

        return $user ? (object) $user[0] : null; // Mengubah hasil menjadi objek User
    }

    /**
     * Update a user's name and email using prepared statements.
     * Metode untuk mengupdate nama dan email pengguna menggunakan prepared statements.
     *
     * @param int $id
     * @param string $name
     * @param string $email
     * @return bool
     */
    public static function updateUser($id, $name, $email)
    {
        return DB::update('update users set name = ?, email = ? where id = ?', [$name, $email, $id]);
    }
}
