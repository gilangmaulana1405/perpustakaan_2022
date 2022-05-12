<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AnggotaModel::all();
        return view('anggota.index', [
            'title' => 'Anggota',
            'anggota' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = AnggotaModel::all();
         return view('anggota.create', [
             'title' => 'Tambah Data Anggota',
             'nama_anggota' => $anggota
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
            'nama_anggota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        AnggotaModel::create($request->all());
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaModel $anggotaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaModel $anggotaModel, $id)
    {
        $anggota = AnggotaModel::find($id);
        return view('anggota.edit', [
            'title' => 'Edit Data Anggota',
            'anggota' => $anggota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnggotaModel $anggotaModel, $id)
    {
        $data = AnggotaModel::find($id)->update($request->all());
        Alert::success('Sukses', 'Data berhasil diubah');
        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = AnggotaModel::find($id);
        $anggota->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/anggota');
    }
}
