@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')

<link href="{{asset('admin_assets/image/logo1.png')}}" rel="icon">
  <link href="{{asset('admin_assets/image/logo1.png')}}" rel="apple-touch-icon">

    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kavling</label>
                <input type="text" name="kavling" class="form-control" placeholder="Kavling" value="{{ $product->kavling }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $product->nama_barang }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Satuan</label>
                <input type="number" name="satuan" class="form-control" placeholder="satuan" value="{{ $product->satuan }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
