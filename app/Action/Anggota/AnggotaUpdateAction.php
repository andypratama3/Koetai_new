<?php

namespace App\Action\Anggota;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaUpdateAction
{
    public function update(Request $request, $slug): void
    {
        $anggota = Anggota::where('slug', $slug)->firstOrFail();
        $anggota->nama = $request->nama;
        $anggota->devisi = $request->devisi;
        $anggota->ig = $request->ig;

        if ($request->hasFile('poto')) {
            $request->file('poto')->move('foto_anggota/', $request->file('poto')->getClientOriginalName());
            $anggota->poto = $request->file('poto')->getClientOriginalName();
        }
        $anggota->update();
    }
}
