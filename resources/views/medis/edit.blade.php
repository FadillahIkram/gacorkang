@extends('layouts.app')

@section('content')
    <h2>Edit Rekam Medis</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('medis.update', $medis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pasien_id">Pasien</label>
            <select name="pasien_id" class="form-control">
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $medis->pasien_id == $patient->id ? 'selected' : '' }}>{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dx">Diagnosis</label>
            <input type="text" name="dx" class="form-control" value="{{ $medis->dx }}" required>
        </div>

        <div class="form-group">
            <label for="tx">Treatment</label>
            <input type="text" name="tx" class="form-control" value="{{ $medis->tx }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $medis->keterangan }}</textarea>
        </div>

        <div class="form-group">
            <label for="kunjungan">Tanggal Kunjungan</label>
            <input type="date" name="kunjungan" class="form-control" value="{{ $medis->kunjungan }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('medis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
