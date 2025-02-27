@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Rekam Medis</h2>
        <a href="{{ route('medis.create') }}" class="btn btn-primary">Tambah Rekam Medis</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Pasien</th>
                <th>Diagnosis</th>
                <th>Treatment</th>
                <th>Tanggal Kunjungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medis as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->patient->name }}</td>
                    <td>{{ $record->dx }}</td>
                    <td>{{ $record->tx }}</td>
                    <td>{{ $record->kunjungan }}</td>
                    <td>
                        <a href="{{ route('medis.edit', $record->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('medis.destroy', $record->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus rekam medis ini?')">Hapus</button>
                        </form>
                        <a href="{{ route('medis.show', $record->id) }}" class="btn btn-success btn-sm">Detail</a>
                    </td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
