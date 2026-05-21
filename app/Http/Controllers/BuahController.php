<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;

use function Laravel\Prompts\title;

class BuahController extends Controller
{
    public function index(){
        //Menentukan judul halaman
        $title = 'Data Buah';
        //Mengambil semua data buah dari database
        $buah = Buah::all();
        //Mengambil view 'buah.index' dengan membawa data title dan buah
        return view('buah.index', compact('title', 'buah'));
    }
    public function create(){
        //Menentukan judul halaman
        $title = 'Tambah Data Buah';
        return view('buah.create', compact('title'));
    }
    public function store(Request $request){
        //Melakukan validasi data yang dikirim oleh pengguna
        $request->validate([
            //Wajib diisi, berupa string, maksimal 50 karakter
            'nama_buah' => 'required|string|max:50',
            //Wajib diisi, harus berupa string
            'jenis_buah' => 'required|string',
            //Wajib diisi, harus berupa angka, dan dimulai 0
            'jumlah_buah' => 'required|numeric|min:0',
            //Wajib diisi, harus berupa string
            'kondisi_buah' => 'required|string',
        ]);
        //Menyimpan data buah ke dalam database
        Buah::create($request->all());
        //Redirect ke halaman index dengan pesan sukses
        return redirect()->route('buah.index')->with('success', 'Data Buah berhasil ditambahkan.');
    
    }
    public function edit(Buah $buah){
        //
    }
    public function update(Request $request, Buah $buah){
        //
    }
    public function destroy(Buah $buah){
        //
    }
}
