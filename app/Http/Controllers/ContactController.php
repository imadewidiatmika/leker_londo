<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact_messages,email', // Menambahkan validasi unique jika perlu
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Simpan ke Database
            $contactMessage = ContactMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            // Redirect dengan Pesan Sukses
            return redirect()->back()->with('success', 'Pesan Anda telah dikirim! Silahkan periksa Email atau WhatsApp Anda secara berkala untuk pesan lebih lanjut.');

        } catch (Exception $e) {
            // Logging error untuk debugging
            Log::error('Error saving contact message: ' . $e->getMessage());

            // Redirect dengan Pesan Gagal
            return redirect()->back()->with('error', 'Terjadi kesalahan! Pesan tidak dapat dikirim. Coba lagi.');
        }
    }
}
