<?php

namespace App\Action\sponsor;

use App\Models\sponsor;
use Illuminate\Http\Request;

class SponsorActionUpdate
{
    public function execute(Request $request, $slug): void
    {
        $sponsor = Sponsor::where('slug', $slug)->firstOrFail();
        $sponsor->nama = $request->nama;

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('foto_sponsor/', $request->file('gambar')->getClientOriginalName());
            $sponsor->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $sponsor->update();
    }
}
