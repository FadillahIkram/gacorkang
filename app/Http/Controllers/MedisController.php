<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Medis;

class MedisController extends Controller
{
    public function index()
    {
        $medis = Medis::with('patient')->get();
        return view('medis.index', compact('medis'));
    }

    public function create()
    {
        $patients = Pasien::all();
        return view('medis.create', compact('patients'));
    }

    public function show(Medis $medis)
    {
        return view('medis.show', compact('medis'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dx' => 'required|string|max:255',
            'tx' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'kunjungan' => 'required|date',
        ]);

        Medis::create($request->all());

        return redirect()->route('medis.index')->with('success', 'Rekam medis berhasil ditambahkan.');
    }

    public function edit(Medis $medis)
    {
        $patients = Pasien::all();
        return view('medis.edit', compact('medis', 'patients'));
    }

    public function update(Request $request, Medis $medis)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dx' => 'required|string|max:255',
            'tx' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'kunjungan' => 'required|date',
        ]);

        $medis->update($request->all());

        return redirect()->route('medis.index')->with('success', 'Rekam medis berhasil diperbarui.');
    }

    public function destroy(Medis $medis)
    {
        $medis->delete();

        return redirect()->route('medis.index')->with('success', 'Rekam medis berhasil dihapus.');
    }
}
