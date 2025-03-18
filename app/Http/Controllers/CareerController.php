<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        // Mengambil semua data career dari database
        $careers = Career::all();

        // Mengirim data ke view
        return view('career', compact('careers'));
    }
}
