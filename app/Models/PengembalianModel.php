<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianModel extends Model
{
    use HasFactory;
    public $table = 'pengembalian';

    protected $fillable = ['id', 'peminjaman_id', 'anggota_id', 'buku_id', 'tanggal_kembali', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->belongsTo(PeminjamanModel::class, 'peminjaman_id');
    }

    public function anggota()
    {
        return $this->belongsTo(AnggotaModel::class);
    }

    public function buku()
    {
        return $this->belongsTo(BukuModel::class);
    }
}
