<?php

namespace App\Http\Controllers;

use App\Models\layanan;

class WekingcareController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pricing()
    {
        $layanans = layanan::latest()->get();
        return view('pricing', compact('layanans'));
    }

    public function book(string $id){
        $layanan = layanan::findOrFail($id);
        return view('book', compact('layanan'));
    }

    public function contact()
    {
        return view('contacts');
    }
}
