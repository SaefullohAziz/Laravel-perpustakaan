<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;

class PeminjamController extends Controller
{
    public function index()
    {
    	return view('peminjam');
    }
    public function pinjam(Request $req)
    {
    	$data = [
    		'nama_peminjam' => $req['nama_peminjam'],
    		'tanggal_pinjam' => date('Y-m-d'),
    		'id_buku' => $req['id_buku'],
    		'tanggal_kembali' => $req['tanggal_kembali'],
            'biaya' => NULL,
    		'status' => 'Pinjam'
    	];
    	Peminjaman::create($data);
    	return redirect('/')->with('sukses', 'Peminjaman Dikonfirmasi, Harap kembalikan buku tepat waktu! Terima kasih :D');
    }
}
