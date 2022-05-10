<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class GaleriController extends Controller
{
    public function index()
    {
        $data = BukuModel::all();
        return view('main-page.galeri.index', [
            'title' => 'Galeri',
            'buku' => $data
        ]);
    }
}
