<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class CariBukuController extends Controller
{
    public function index()
    {
        $data = BukuModel::all();
        return view('main-page.cari-buku.index', [
            'title' => 'Cari Buku',
            'buku' => $data
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $data =  BukuModel::where('judul', 'LIKE', '%'.$search.'%')->get();
        return view('main-page.cari-buku.search', compact('data'));
    }
}
