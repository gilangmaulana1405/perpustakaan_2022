<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PeminjamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PeminjamanModel::all();
        return view('peminjaman.index', [
            'title' => 'Peminjaman',
            'peminjaman' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_anggota = AnggotaModel::all();
        $buku = BukuModel::all();

        return view('peminjaman.create', [
            'title' => 'Tambah Data Peminjaman',
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
        $validator = Validator::make($request->all(), [
            'tanggal_pinjam' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());        
        }

        $validated = $validator->validated();

        $validated = [
            'anggota_id' => $request->anggota_id,
            'buku_id' => $request->buku_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
        ];

        PeminjamanModel::create($validated);
        return redirect('/peminjaman')->with('success', 'Data has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanModel $peminjamanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PeminjamanModel $peminjamanModel, $id)
    {
        $peminjaman = PeminjamanModel::find($id);
        $anggota = AnggotaModel::all();
        $buku = BukuModel::all();

        return view('peminjaman.edit', [
            'title' => 'Edit Data Peminjaman',
            'peminjaman' => $peminjaman,
            'nama_anggota' => $anggota,
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = PeminjamanModel::find($id);
        $peminjaman->anggota_id = $request->anggota_id;
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->save();
        
        return redirect('/peminjaman')->with('success', 'Data has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanModel  $peminjamanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PeminjamanModel::where('id', $id)->first();

         if ($data != null) {
            $data->delete();
            return redirect('/peminjaman')->with('success', 'Data has been deleted!');
        }
    }
}
