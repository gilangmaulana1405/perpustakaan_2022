<?php


namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnggotaController extends Controller
{
    public function index()
     {
        $data = AnggotaModel::all();
        return view('anggota.index', [
            'title' => 'Anggota',
            'anggota' => $data
        ]);
     }

     public function store(Request $request)
     {
        $validator = Validator::make($request->all(), [
            'nama_anggota' => 'required|max:255',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()
            ]);
        }else{
            $data = new AnggotaModel;
            $data->nama_anggota = $request->input('nama_anggota');
            $data->kelas = $request->input('kelas');
            $data->jurusan = $request->input('jurusan');
            $data->jenis_kelamin = $request->input('jenis_kelamin');
            $data->alamat = $request->input('alamat');
            
            $data->save();
            return response()->json([
                'status' => 200,
                'message' => 'Data berhasil ditambahkan',
            ]);
        }
     }

     public function destroy($id) 
     {
     }
}
