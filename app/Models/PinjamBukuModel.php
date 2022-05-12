<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBukuModel extends Model
{
    use HasFactory;

    protected $table = 'pinjam_buku';
    protected $guarded = ['id'];
    protected $fillable = ['id', 'nama_lengkap', 'judul_buku', 'kategori', 'jumlah_pinjam', 'tanggal_pinjam', 'created_at', 'updated_at'];
}
