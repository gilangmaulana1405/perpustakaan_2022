<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariBukuController extends Controller
{
    public function index()
    {
        return view('main-page.cari-buku.index', [
            'title' => 'Cari Buku'
        ]);
    }
}
