<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;


class DealController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input tanpa unique constraint
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email', // Hapus 'unique' agar kita bisa cek manual
            'nowa' => 'nullable|string|max:20',
            'province_id' => 'required|string',
            'province_name' => 'required|string',
            'city_id' => 'required|string',
            'city_name' => 'required|string',
        ]);
    
        // Cek apakah email atau nomor WhatsApp sudah terdaftar
        $existingEmail = Deal::where('email', $validated['email'])->exists();
        $existingNowa = Deal::where('nowa', $validated['nowa'])->exists();
    
        if ($existingEmail || $existingNowa) {
            $alertMessage = '';
    
            if ($existingEmail) {
                $alertMessage .= 'Email ini sudah terdaftar! ';
            }
    
            if ($existingNowa) {
                $alertMessage .= 'Nomor WhatsApp ini sudah terdaftar! ';
            }
    
            // Kirim session 'warning' agar SweetAlert bisa menampilkan pesan
            session()->flash('warning', trim($alertMessage));
    
            return redirect()->route('home');
        }
    
        // Simpan ke database jika tidak ada duplikasi
        Deal::create([
            'name' => strip_tags($validated['name']),
            'email' => isset($validated['email']) ? strip_tags($validated['email']) : null,
            'nowa' => isset($validated['nowa']) ? strip_tags($validated['nowa']) : null,
            'province_id' => $validated['province_id'],
            'province_name' => strip_tags($validated['province_name']),
            'city_id' => $validated['city_id'],
            'city_name' => strip_tags($validated['city_name']),
        ]);
    
        // Redirect dengan pesan sukses
        session()->flash('success', 'Pendaftaran berhasil! Selalu periksa Email/WhatsApp Anda untuk pemberitahuan kemitraan lebih lanjut.');
    
        return redirect()->route('home');
    }
    
}
