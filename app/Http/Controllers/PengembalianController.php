<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PengembalianModel::orderBy('created_at', 'desc')->get();
        return view('pengembalian.index', [
            'title' => 'Pengembalian',
            'pengembalian' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengembalian.create', [
            'title' => 'Tambah Data Pengembalian'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Validator $validator)
    {
        $request->validate([
            'nama_anggota' => 'required|max:255',
            'judul_buku' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        PengembalianModel::create($request->all());
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/pengembalian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengembalianModel  $pengembalianModel
     * @return \Illuminate\Http\Response
     */
    public function show(PengembalianModel $pengembalianModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengembalianModel  $pengembalianModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PengembalianModel $pengembalianModel, $id)
    {
        $pengembalian = PengembalianModel::find($id);
        return view('pengembalian.edit', [
            'title' => 'Edit Data Pengembalian',
            'pengembalian' => $pengembalian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengembalianModel  $pengembalianModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = PengembalianModel::find($id)->update($request->all());
        
        Alert::success('Sukses', 'Data berhasil diubah');
        return redirect('/pengembalian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengembalianModel  $pengembalianModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = PengembalianModel::find($id);
        $pengembalian->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/pengembalian');
    }
}
