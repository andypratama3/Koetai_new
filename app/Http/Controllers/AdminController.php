<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Anggota;

class AdminController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        $count = $anggota->count();

        $event = Event::orderBy('created_at')->get();

        return view('admin.index', compact('count','event'));
    }
}
