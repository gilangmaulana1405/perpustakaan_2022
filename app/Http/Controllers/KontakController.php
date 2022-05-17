<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
{
    public function index()
    {
        return view('main-page.kontak.index', [
            'title' => 'Contact',
        ]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email:dns|unique:kontak|',
            'subject' => 'required',
            'message' => 'required',
        ]);

        KontakModel::create($request->all());
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/main-page/kontak');
    }
}
