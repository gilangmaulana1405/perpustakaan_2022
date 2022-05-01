<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PengembalianModel::all();
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
        $peminjaman = PeminjamanModel::all();
        $nama_anggota = AnggotaModel::all();
        $buku = BukuModel::all();

        return view('pengembalian.create', [
            'title' => 'Tambah Data Pengembalian',
            'peminjaman' => $peminjaman,
            'nama_anggota' => $nama_anggota,
            'buku' => $buku
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'tanggal_kembali' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());        
        }

        $validated = $validator->validated();

        $validated = [
            'peminjaman_id' => $request->peminjaman_id,
            'anggota_id' => $request->anggota_id,
            'buku_id' => $request->buku_id,
            'tanggal_kembali' => $request->tanggal_kembali,
        ];

        PengembalianModel::create($validated);
        return redirect('/pengembalian')->with('success', 'Data has been created!');
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
        $peminjaman = PeminjamanModel::all();
        $anggota = AnggotaModel::all();
        $buku = BukuModel::all();
        return view('pengembalian.edit', [
            'title' => 'Edit Data Pengembalian',
            'pengembalian' => $pengembalian,
            'peminjaman' => $peminjaman,
            'nama_anggota' => $anggota,
            'buku' => $buku
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
        
        return redirect('/pengembalian')->with('success', 'Data has been updated');
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
        return redirect('/pengembalian')->with('success', 'Data has been deleted!');
    }
}
