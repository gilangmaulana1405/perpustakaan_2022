<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamBukuModel;
use App\Models\BukuModel;
use RealRashid\SweetAlert\Facades\Alert;

class PinjamBukuController extends Controller
{
    public function index()
    {
        $data = PinjamBukuModel::all();
        return view('pinjambuku.index', [
            'title' => 'Pinjam Buku',
            'pinjam_buku' => $data
        ]);
    }

    public function create($id)
    {
        $data = BukuModel::find($id);
        
        return view('main-page.galeri.create', [
            'title' => 'Tambah Data Pinjam Buku',
            'buku' => $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'judul_buku' => 'required',
            'kategori' => 'required',
            'jumlah_pinjam' => 'required|numeric',
            'tanggal_pinjam' => 'required',
        ]);

        $data = PinjamBukuModel::create($request->all());
        Alert::success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/main-page/galeri');

    }
}
