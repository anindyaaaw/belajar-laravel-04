<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Anindya';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

