<?php

namespace App\Action\Event;

use App\Models\Event;

class EventDestroyAction
{
    public function execute($slug): void
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $file = public_path('/foto_event/').$event->gambar;
        if(file_exists($file)){
            @unlink($file);
        }
        $event->delete();
    }
}
