<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianModel extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $fillable = ['id', 'nama_anggota', 'judul_buku', 'kategori', 'penulis', 'penerbit', 'tahun_terbit', 'tanggal_pinjam', 'tanggal_kembali', 'created_at', 'updated_at'];
    protected $guarded = ['id'];
}
