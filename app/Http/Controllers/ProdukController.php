<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\ProdukRequest;
use App\Action\Produk\ProdukActionStore;

class ProdukController extends Controller
{
    public function index(){
        $no = 1;
        $produk = Produk::select(['nama','harga','stock','kategori_id','slug'])->with('kategori:id,nama')->get();
        return view('admin.produk.index', compact('produk','no'));
    }

    public function create(){
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }
    public function store(ProdukRequest $request, ProdukActionStore $produkActionStore){

        $produkActionStore->execute($request);
        return redirect()->route('admin.produk.index')->with('success', 'produk Berhasil Di Tambah');
    }
    // public function how




}
