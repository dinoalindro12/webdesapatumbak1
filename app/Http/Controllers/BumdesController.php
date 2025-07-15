<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bumdes;

class BumdesController extends Controller
{
    public function index()
    {
        $bumdes = Bumdes::first();
        return view('profil-desa.bumdes', compact('bumdes'));
    }
    public function edit(){
        
    }
}
