<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    //
    public function index(){
        $data_buku = Buku::all();
        $jumlah_data = Buku::count(); // Menghitung jumlah data
        $total_harga = Buku::sum('harga'); // Menghitung total harga semua buku
        $no = 0;
        return view('buku.index', compact('data_buku', 'no','jumlah_data', 'total_harga'));
    }
}
