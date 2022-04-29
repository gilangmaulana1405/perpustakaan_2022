<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    use HasFactory;

    public $table = 'anggota';

    protected $fillable = ['nama_anggota', 'kelas', 'jurusan', 'jenis_kelamin', 'alamat', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(PeminjamanModel::class, 'anggota_id');
    }
}
