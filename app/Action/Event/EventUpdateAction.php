<?php

namespace App\Action\Event;

use App\Models\Event;
use Illuminate\Http\Request;

class EventUpdateAction
{
    public function execute(Request $request, $slug): void
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $event->nama = $request->nama;
        $event->desc = $request->desc;

        if ($request->hasFile('poto')) {
            $request->file('poto')->move('foto_event/', $request->file('poto')->getClientOriginalName());
            $event->poto = $request->file('poto')->getClientOriginalName();
        }
        $event->update();
    }
}
