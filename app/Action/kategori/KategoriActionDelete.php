<?php

namespace App\Action\kategori;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriActionStore{

    public function execute($slug){
        $kategori = Kategori::where('slug',$slug)->firstOrFail();

        $kategori->delete();
    }
}
