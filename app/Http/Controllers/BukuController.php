<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BukuModel::orderBy('created_at', 'desc')->get();
        return view('buku.index', [
            'title' => 'Buku',
            'buku' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = BukuModel::all();
         return view('buku.create', [
             'title' => 'Tambah Data Buku',
             'buku' => $buku
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_buku' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $data = BukuModel::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function show(BukuModel $bukuModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BukuModel $bukuModel, $id)
    {
        $buku = BukuModel::find($id);
        return view('buku.edit', [
            'title' => 'Edit Data Buku',
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BukuModel $bukuModel, $id)
    {
        
        $data = BukuModel::find($id);
        $data->judul = $request->input('judul');
        $data->kategori = $request->input('kategori');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->tahun_terbit = $request->input('tahun_terbit');
        $data->jumlah_buku = $request->input('jumlah_buku');

        if($request->hasFile('gambar')){
            $destination = 'img/'. $request->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('img/', $filename);
            $data->gambar = $filename;

        }

        $data->update();

        Alert::success('Sukses', 'Data berhasil diubah');
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // membuat fungsi delete
        $buku = BukuModel::find($id);
        $buku->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/buku');

    }
}
