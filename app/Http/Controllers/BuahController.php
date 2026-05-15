<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;

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
        //
    }
    public function store(Request $request){
        //
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
