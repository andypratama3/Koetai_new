<?php

namespace App\Action\Anggota;

use App\Models\Anggota;

class DeleteAnggotaAction
{
    public function execute($slug)
    {
        $anggota = Anggota::where('slug', $slug)->firstOrFail();
        $file = public_path('/foto_anggota/').$anggota->poto;
        if(file_exists($file)){
            @unlink($file);
        }
        $anggota->delete();
    }
}
