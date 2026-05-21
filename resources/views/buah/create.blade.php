@extends('layouts.app')

@section('content')
<form action="{{ route('buah.store') }}" method="POST">
    @csrf
    <label for="name">Nama Buah</label>
    <input type="text" name="nama_buah" required><br><br>

    <label for="position">Jenis Buah</label>
    <select name="jenis_buah">
        <option disabled selected>-- Pilih salah satu --</option>
        <option value="Buah Tropis">Buah Tropis</option>
        <option value="Buah Citrus">Buah Citrus</option>
        <option value="Buah Beri">Buah Beri</option>
        <option value="Buah Berbiji Besar">Buah Berbiji Besar</option>
        <option value="Buah Berdaging Banyak Air">Buah Berdaging Banyak Air</option>
    </select><br><br>

    <label for="amount">Jumlah Buah</label>
    <input type="number" name="jumlah_buah"><br><br>

    <label for="condition">Kondisi Buah</label>
    <input type="text" name="kondisi_buah"><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('buah.index') }}">Batal</a>
</form>
@endsection