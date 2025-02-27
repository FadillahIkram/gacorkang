@extends('layouts.app')

@section('content')
    <h2>Detail Rekam Medis</h2>

    <p><strong>ID Pasien:</strong> {{ $medis->pasien_id }}</p>
    <p><strong>Diagnosis:</strong> {{ $medis->dx }}</p>
    <p><strong>Treatment:</strong> {{ $medis->tx }}</p>
    <p><strong>Keterangan:</strong> {{ $medis->keterangan }}</p>
    <p><strong>Tanggal Kunjungan:</strong> {{ $medis->kunjungan }}</p>

    <a href="{{ route('medis.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
