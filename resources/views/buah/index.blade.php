@extends('layouts.app')

@section('content')
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Buah</th>
            <th>Jenis Buah</th>
            <th>Jumlah Buah</th>
            <th>Kondisi Buah</th>
            <th><a href="#">Tambah Data </a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($buah as $data)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $data->nama_buah }}</td>
            <td>{{ $data->jenis_buah }}</td>
            <td>{{ $data->jumlah_buah }}</td>
            <td>{{ $data->kondisi_buah }}</td>
            <td>
                <a href="#">Edit</a>
                <button type="submit" onclick="return confirm('Hapus buah ini?')">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection