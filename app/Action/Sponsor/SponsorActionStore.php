<?php

namespace App\Action\Sponsor;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorActionStore{

    public function execute(Request $request ): void
    {
        $sponsor = new Sponsor();
        $sponsor->nama = $request->nama;
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('foto_sponsor/', $request->file('gambar')->getClientOriginalName());
            $sponsor->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $sponsor->save();
    }
}
