<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Contoh pengambilan data atau logika lainnya sebelum menampilkan halaman
        $userData = auth()->user(); // Contoh pengambilan data user

        return view('admin.dashboard', compact('userData'));
    }
}