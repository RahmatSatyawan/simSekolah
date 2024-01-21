<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        //list siswa JSON
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    public function show($id)
    {
        //siswa(nilai) JSON
        $siswa = Siswa::with('nilai')->find($id);
        return response()->json($siswa);
    }
}
