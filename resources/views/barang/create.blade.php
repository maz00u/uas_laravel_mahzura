@extends('layouts.app')

@section('content')

<h2> Tambah Data Barang</h2>

    <form action="{{ url('barang') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Kode Barang</label>
            <input type="text" name="kode_barang" id="" class="form-control">
        </div> 
        <div class="mb-3">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Satuan</label>
            <input type="text" name="satuan" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Stok</label>
            <input type="text" name="stok" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

@endsection