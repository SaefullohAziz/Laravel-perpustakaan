<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'table_peminjaman';
    protected $fillable = [
        'nama_peminjam', 'tanggal_pinjam', 'id_buku', 'tanggal_kembali', 'status'
    ];
}
