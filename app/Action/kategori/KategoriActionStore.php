<?php

namespace App\Action\kategori;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriActionStore{

    public function execute(Request $request){
        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
    }
}
