<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;

    public $table = 'buku';

    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(PeminjamanModel::class, 'buku_id');
    }
}
