<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class CobaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::where ("angkatan", 2020)->get();
        return view('posts.index', compact('data'));
    }
}
