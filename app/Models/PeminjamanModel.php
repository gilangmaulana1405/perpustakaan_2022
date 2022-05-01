<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;
    public $table = 'peminjaman';

    protected $fillable = ['id', 'anggota_id', 'buku_id', 'tanggal_pinjam', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function anggota()
    {
        return $this->belongsTo(AnggotaModel::class);
    }

    public function buku()
    {
        return $this->belongsTo(BukuModel::class);
    }

    public function pengembalian()
    {
        return $this->hasMany(PengembalianModel::class);
    }
}
