@extends('layouts.app')

@section('content')
    <a href="{{ route('patients.create') }}">Tambah Pasien</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Diagnosis</th>
            <th>Aksi</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->age }}</td>
            <td>{{ $patient->address }}</td>
            <td>{{ $patient->diagnosis }}</td>
            <td>
                <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
