<?php

namespace App\Http\Controllers;

use App\Action\Anggota\AnggotaUpdateAction;
use App\Action\Anggota\DeleteAnggotaAction;
use App\Action\Anggota\StoreAnggotaAction;
use App\Http\Requests\StoreAnggotaRequest;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $no = 1;
        // $anggota = Anggota::all(); // Diusahakan jangan cuma pake all, tp harus ada urutan
        $anggota = Anggota::orderBy('nama')->get();
        $anggota = Anggota::orderBy('devisi')->get();

        return view('admin.anggota.index', compact('no', 'anggota'));
    }

    public function store(StoreAnggotaRequest $request, StoreAnggotaAction $storeanggotaAction)
    {
        $storeanggotaAction->execute($request);

        return redirect()->route('admin.anggota.index')->with('success', 'Berhasil menambahkan Anggota!');
    }

    public function show($slug)
    {
        $anggota = Anggota::where('slug', $slug)->firstOrFail();

        return view('admin.anggota.edit', compact('anggota'));
    }

    public function update(StoreAnggotaRequest $request, AnggotaUpdateAction $AnggotUpdateAction, $slug)
    {
        $AnggotUpdateAction->update($request, $slug);

        return redirect()->route('admin.anggota.index')->with('success', 'Berhasil Update Anggota');
    }

    public function destroy(DeleteAnggotaAction $deleteAnggotaAction, $slug)
    {
        $deleteAnggotaAction->execute($slug);

        return redirect()->route('admin.anggota.index')->with('delete', 'Anggota Berhasil Di Hapus!');
    }
}
