<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SirkuitController extends Controller
{
    // Method untuk menampilkan halaman
    public function sirkuit()
    {
        // Mengirim data ke view sirkuit
        return view('user.sirkuit');
    }
}
