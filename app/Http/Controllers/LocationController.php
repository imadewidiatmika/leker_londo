<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index()
{
    $locations = Location::all(); // Mengambil semua data lokasi dari database

    return view('location', compact('locations')); // Mengirim data ke view
}


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'map_link' => 'required|string|url',
        ]);

        // Menyimpan gambar ke storage
        $imagePath = $request->file('image')->store('public/images');

        // Menyimpan lokasi ke database
        Location::create([
            'name' => $request->name,
            'address' => $request->address,
            'image' => $imagePath,
            'map_link' => $request->map_link,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Lokasi berhasil disimpan!');
    }
}
