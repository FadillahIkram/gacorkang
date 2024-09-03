<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $patients = Pasien::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
        ]);

        Pasien::create($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }

    public function edit(Pasien $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Pasien $patient)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
        ]);

        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    public function destroy(Pasien $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}
