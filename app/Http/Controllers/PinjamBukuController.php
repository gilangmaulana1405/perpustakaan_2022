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
        $data = PinjamBukuModel::orderBy('created_at', 'desc')->get();
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
        return redirect('/main-page/galeri/invoice/'. $data->id)->with('success', 'Data berhasil ditambahkan');
    }

    public function invoice($id)
    {
        $data = PinjamBukuModel::where('id', $id)->first();
        return view('main-page.galeri.invoice', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $pinjambuku = PinjamBukuModel::find($id);
        return view('pinjambuku.edit', [
            'title' => 'Edit Pinjam Buku',
            'pinjambuku' => $pinjambuku
        ]);
    }

    public function update(Request $request, $id)
    {
        $pinjambuku = PinjamBukuModel::find($id)->update($request->all());
        Alert::success('Sukses', 'Data berhasil diubah');
        return redirect('/pinjambuku');
    }

    public function destroy($id)
    {
        PinjamBukuModel::find($id)->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/pinjambuku');
    }
}
