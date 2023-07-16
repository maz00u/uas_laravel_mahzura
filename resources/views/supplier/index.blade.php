@extends('layouts.app')

@section('content')

<h2> Data Supplier </h2>
<br>
<a href="{{ url('supplier/create') }}" class="btn btn-success">Tambah Data Supplier</a>
<br>
<br>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID SUPPLIER</th>
        <th>NAMA SUPPLIER</th>
        <th>ID BARANG</th>
        <th>TELEPON</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->id_supplier }}</td>
        <td>{{ $row->nama_supplier }}</td>
        <td>{{ $row->id_supplier_barang }}</td>
        <td>{{ $row->telepon }}</td>
        <td>{{ $row->alamat }}</td>
        <td><a href="{{ url('supplier/edit/' .$row->id_supplier )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('supplier/' .$row->id_supplier) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>

    </tr>
    @endforeach

</table>

@endsection