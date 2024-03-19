@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle','Kategori')
@section('content_header_title','Kategori')
@section('content_header_subtitle','Create')

@section('content')
    <div class="container">
        <div class="card-header">
            <h3 class="card-title">Buat Kategori Baru</h3>
        </div>
        <form method="POST" action="{{ route('kategori.simpan') }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Kode Kategori">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Nama Kategori">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection