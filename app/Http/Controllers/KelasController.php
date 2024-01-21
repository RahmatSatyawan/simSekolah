<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        //list kelas JSON
        $kelas = Kelas::all();
        return response()->json($kelas);
    }

    public function show($id)
    {
        //detail kelas JSON
        $kelas = Kelas::with('siswa')->find($id);
        return response()->json($kelas);
    }

    public function store(Request $request)
    {
        //Store kelas baru
        $kelas = Kelas::create($request->all());
        return response()->json($kelas, 201);
    }

    public function update(Request $request, $id)
    {
        //Update kelas
        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());
        return response()->json($kelas, 200);
    }
}
