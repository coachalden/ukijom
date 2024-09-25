@extends('layouts.app')
  
@section('title', 'Detail Barang')
  
@section('contents')
    <h1 class="mb-0">Detail Barang</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kavling</label>
            <input type="text" name="kavling" class="form-control" placeholder="Kavling" value="{{ $product->kavling }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $product->nama_barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Satuan</label>
            <input type="number" name="satuan" class="form-control" placeholder="satuan" value="{{ $product->satuan }}" >

        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection