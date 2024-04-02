@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Kategori</div>
            <div class="card-body">
                <form method="POST" action="{{ route('kategori.update', $kategori->kategori_id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kodeKategori">Kode:</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{ $kategori->kategori_kode }}">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori:</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{ $kategori->kategori_nama }}">
                    </div>
                    <button type="submit" class="btn btn-success" value="Ubah">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection