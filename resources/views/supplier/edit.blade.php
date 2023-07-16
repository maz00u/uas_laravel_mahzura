@extends('layouts.app')

@section('content')

<h2> Tambah Data Supplier</h2>

    <form action="{{ url('supplier/' .$row->id_supplier) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">Nama Supplier</label>
            <input type="text" name="nama_supplier" id="" class="form-control" value="{{$row->nama_supplier}}">
        </div> 
        <div class="mb-3">
            <label for="">ID Barang</label>
            <input type="text" name="id_supplier_barang" id="" class="form-control" value="{{$row->id_supplier_barang}}">
        </div>
        <div class="mb-3">
            <label for="">Telepon</label>
            <input type="text" name="telepon" id="" class="form-control" value="{{$row->telepon}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="" class="form-control" value="{{$row->alamat}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

@endsection