<?php

namespace App\Http\Controllers;

use App\Models\Destination; // Pastikan model sudah dibuat dan sesuai
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel destinations
        $destinations = Destination::with(['category', 'owner'])->get(); // Pastikan relasi sudah ada
        
        // Kirim data ke view
        return view('destinations.index', compact('destinations'));
    }
}
