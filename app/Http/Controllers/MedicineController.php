<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // <- Add this line

class MedicineController extends Controller
{
    public function index()
    {
        // Load JSON file
        $json = File::get(public_path('medicines.json'));
        $medicines = json_decode($json, true);

        // Pass data to view
        return view('medicines.index', compact('medicines'));
    }
}