@extends('layouts.app')

@section('content')

<h2> Data Barang </h2>
<br>
<a href="{{ url('barang/create') }}" class="btn btn-success">Tambah Data Barang</a>
<br>
<br>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID BARANG</th>
        <th>KODE BARANG</th>
        <th>NAMA BARANG</th>
        <th>SATUAN</th>
        <th>STOK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->kode_barang }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>{{ $row->satuan }}</td>
        <td>{{ $row->stok }}</td>
        <td><a href="{{ url('barang/edit/' .$row->id_barang )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('barang/' .$row->id_barang) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>

    </tr>
    @endforeach

</table>

@endsection