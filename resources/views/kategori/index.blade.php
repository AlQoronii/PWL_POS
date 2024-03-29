@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle','Menu')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                  {{$dataTable->table()}}  
            </div>
        </div>
        <a href="{{ route('kategori.tambah') }}" class="btn btn-success">Tambah Kategori</a>
    </div>
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush