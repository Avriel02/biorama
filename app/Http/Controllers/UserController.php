<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Metode untuk menampilkan halaman profil pengguna
    public function profile()
    {
        // Ambil data user dari database
        $user = auth()->user();

        // Tampilkan view dengan data user
        return view('profile', compact('user'));
    }

    // Metode untuk memperbarui profil pengguna
public function update(Request $request)
{
    $user = auth()->user();

    // Debug data yang diterima dari form
    dd($request->all());

    // Validasi data yang diterima
    $validatedData = $request->validate([
        'name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:15',
        'gender' => 'nullable|in:male,female',
        'birthdate' => 'nullable|date',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'username' => 'required|string|max:255|unique:users,username,' . $user->id,
    ]);

    // Debug data yang sudah divalidasi
    dd($validatedData);

    // Cek apakah username sudah pernah diubah
    if (!$user->username_changed) {
        $user->username = $validatedData['username'];
        $user->username_changed = true;
    } else {
        if ($user->username != $validatedData['username']) {
            return redirect()->back()->withErrors(['username' => 'Username hanya bisa diubah satu kali.']);
        }
    }

    // Perbarui data user secara langsung
    $user->name = $validatedData['name'] ?? $user->name;
    $user->phone = $validatedData['phone'] ?? $user->phone;
    $user->gender = $validatedData['gender'] ?? $user->gender;
    $user->birthdate = $validatedData['birthdate'] ?? $user->birthdate;
    $user->email = $validatedData['email'] ?? $user->email;

    // Debug sebelum menyimpan
    dd($user->toArray());

    // Simpan perubahan
    $user->save();

    // Debug setelah menyimpan
    dd('Data berhasil disimpan', $user->toArray());
}




}
