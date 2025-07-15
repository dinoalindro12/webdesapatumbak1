<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perangkat;

class PerangkatController extends Controller
{
    public function index()
    {
        $perangkat = Perangkat::all();
        return view('profil-desa.perangkat-desa', compact('perangkat'));
    }
    public function struktur()
    {
        $struktur = Perangkat::all();
        return view('profil-desa.struktur-organisasi', compact('struktur'));
    }
}
