<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventRequest;
use App\Action\Event\StoreEventAction;
use App\Action\Event\EventUpdateAction;
use App\Action\Event\eventDestroyAction;

class EventController extends Controller
{
    public function index()
    {
        $no = 1;
        $event = Event::all();

        return view('admin.event.index', compact('event', 'no'));
    }

    public function store(EventRequest $request, StoreEventAction $StoreEventAction)
    {
        $StoreEventAction->execute($request);

        return redirect()->route('admin.event.index')->with('success', 'Event Berhasil Di Tambah');
    }

    public function edit($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('admin.event.edit', compact('event'));
    }

    public function update(EventRequest $request, EventUpdateAction $EventUpdateAction, $slug)
    {
        $EventUpdateAction->execute($request, $slug);

        return redirect()->route('admin.event.index')->with('success', 'Event Berhasil Di Update');
    }

    public function destroy(eventDestroyAction $eventDestroyAction, $slug)
    {
        $eventDestroyAction->execute($slug);

        return redirect()->route('admin.event.index')->with('delete', 'Event Berhasil Di Hapus');
    }
}
