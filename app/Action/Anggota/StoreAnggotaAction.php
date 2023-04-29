<?php

namespace App\Action\Anggota;

use App\Models\Anggota;
use Illuminate\Http\Request;

class StoreAnggotaAction
{
    public function execute(Request $request): void
    {
        $anggota = new Anggota();

        $anggota->nama = $request->nama;
        $anggota->devisi = $request->devisi;
        $anggota->ig = $request->ig;
        // upload picture
        if ($request->hasFile('poto')) {
            $request->file('poto')->move('foto_anggota/', $request->file('poto')->getClientOriginalName());
            $anggota->poto = $request->file('poto')->getClientOriginalName();
        }
        $anggota->save();
    }
}
