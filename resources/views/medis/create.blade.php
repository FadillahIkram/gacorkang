@extends('layouts.app')

@section('content')
    <h2>Tambah Rekam Medis</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('medis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pasien_id">Pasien</label>
            <select name="pasien_id" class="form-control" required>
                <option value="">Pilih Pasien</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dx">Diagnosis</label>
            <input type="text" name="dx" class="form-control" value="{{ old('dx') }}" required>
        </div>

        <div class="form-group">
            <label for="tx">Treatment</label>
            <input type="text" name="tx" class="form-control" value="{{ old('tx') }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
        </div>

        <div class="form-group">
            <label for="kunjungan">Tanggal Kunjungan</label>
            <input type="date" name="kunjungan" class="form-control" value="{{ old('kunjungan') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('medis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
