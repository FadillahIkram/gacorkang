<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $patients = Pasien::all();
       return response()->json($patients);
    }

    public function show($id)
    {
        $patient = Pasien::findOrFail($id);
        return response()->json($patients);
    }


}
