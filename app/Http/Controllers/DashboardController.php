<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Method untuk menampilkan halaman dashboard
    public function index()
    {
        // Mengirim data ke view dashboard
        return view('admin.dashboard');
    }
}
