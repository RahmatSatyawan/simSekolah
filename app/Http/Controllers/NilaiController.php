<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function show($siswaId, $mataPelajaran)
    {
        //detail nilai per mata pelajaran JSON
        $nilai = Nilai::where('siswa_id', $siswaId)
            ->where('mata_pelajaran', $mataPelajaran)
            ->first();

        return response()->json($nilai);
    }

    public function store(Request $request)
    {
        //Store nilai pelajaran seorang siswa
        $nilai = Nilai::create($request->all());
        return response()->json($nilai, 201);
    }
}
