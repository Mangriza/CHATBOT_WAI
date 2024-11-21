<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan halaman dashboard
    public function index()
    {
        // Ambil data yang dibutuhkan untuk dashboard (misalnya data pengguna)
        // Jika kamu ingin mengambil data pengguna
        // $user = auth()->user();

        // Mengirimkan data ke view (dashboard.blade.php)
        return view('dashboard'); // Ganti dengan nama view yang sesuai
    }
}
