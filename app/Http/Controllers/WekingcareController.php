<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class WekingcareController extends Controller
{
    public function index(){
        return view('index');
    }

    public function book(){
        
        return view('book');
    }

    public function contact(){
        return view('contacts');
    }
}
