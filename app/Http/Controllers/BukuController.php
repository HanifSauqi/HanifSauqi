<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    //
    public function index(){
        $data_buku = Buku::all();
        $jumlah_buku = Buku::count(); // Menghitung jumlah data
        $total_harga = Buku::sum('harga'); // Menghitung total harga semua buku
        $no = 0;
        return view('buku.index', compact('data_buku', 'no','jumlah_buku', 'total_harga'));
    }

    public function create(){
        return view('buku.create');
    }
    public function store(Request $request){
        $buku = new Buku;
        $buku -> id = $request -> id;
        $buku -> judul = $request -> judul; 
        $buku -> penulis = $request -> penulis;
        $buku -> harga = $request -> harga;
        $buku -> tgl_terbit = $request -> tgl_terbit;
        $buku -> save();
        return redirect ('/buku');
    }
    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id) {
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku');
    }
}