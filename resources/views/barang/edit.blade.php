@extends('layouts.app')

@section('content')

<h2> Edit Data Barang</h2>

<form action="{{ url('barang/' .$row->id_barang) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">Kode Barang</label>
            <input type="text" name="kode_barang" id="" class="form-control" value="{{$row->kode_barang}}">
        </div> 
        <div class="mb-3">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" id="" class="form-control" value="{{$row->nama_barang}}">
        </div>
        <div class="mb-3">
            <label for="">Satuan</label>
            <input type="text" name="satuan" id="" class="form-control" value="{{$row->satuan}}">
        </div>
        <div class="mb-3">
            <label for="">Stok</label>
            <input type="text" name="stok" id="" class="form-control" value="{{$row->stok}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

@endsection