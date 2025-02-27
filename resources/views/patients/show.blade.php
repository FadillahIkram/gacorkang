@extends('layouts.app')

@section('content')
    <h2>Detail Pasien</h2>

    <p><strong>ID Pasien:</strong> {{ $patient->id }}</p>
    <p><strong>Nama:</strong> {{ $patient->name }}</p>
    <p><strong>Alamat:</strong> {{ $patient->address }}</p>

    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
