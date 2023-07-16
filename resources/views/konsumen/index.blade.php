@extends('layouts.app')

@section('content')

<h2> Data Konsumen </h2>
<br>
<a href="{{ url('konsumen/create') }}" class="btn btn-success">Tambah Data Konsumen</a>
<br>
<br>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID KONSUMEN</th>
        <th>ID BARANG</th>
        <th>NAMA KONSUMEN</th>
        <th>TELEPON</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->id_konsumen }}</td>
        <td>{{ $row->id_konsumen_barang }}</td>
        <td>{{ $row->nama_konsumen }}</td>
        <td>{{ $row->telepon }}</td>
        <td>{{ $row->alamat }}</td>
        <td><a href="{{ url('konsumen/edit/' .$row->id_konsumen )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('konsumen/' .$row->id_konsumen) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>

    </tr>
    @endforeach

</table>

@endsection