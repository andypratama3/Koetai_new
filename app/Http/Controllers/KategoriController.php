<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequestStore;
use App\Action\kategori\KategoriActionStore;
use App\Action\kategori\KategoriActionDelete;

class KategoriController extends Controller
{
    public function index()
    {
        $no = 1;
        $kategori = Kategori::all();
        return view('admin.produk.kategori.index', compact('kategori','no'));
    }
    public function store(KategoriRequestStore $request, KategoriActionStore $kategoriActionStore)
    {
        $kategoriActionStore->execute($request);
        return redirect()->route('admin.produk.kategori.index')->with('success','Kategori Berhasil Di tambahkan!');
    }
    public function destroy(KategoriActionDelete $kategoriActionDelete, $slug)
    {
        $kategoriActionDelete->execute($slug);
        redirect()->route('admin.produk.kategori.index')->with('success','Kategori Berhasil Di tambahkan!');
    }
}
