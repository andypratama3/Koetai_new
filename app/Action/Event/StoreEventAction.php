<?php

namespace App\Action\Event;

use App\Models\Event;
use Illuminate\Http\Request;

class StoreEventAction
{
    public function execute(Request $request): void
    {
        $event = new Event();
        $event->nama = $request->nama;
        $event->desc = $request->desc;
        // upload picture
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('foto_event/', $request->file('gambar')->getClientOriginalName());
            $event->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $event->save();
    }
}
