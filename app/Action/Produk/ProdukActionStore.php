<?php

namespace App\Action\Produk;


use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukActionStore
{
    public function execute(Request $request){

        $produk = New Produk();
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->kategori_id = $request->kategori_id;

        // if ($request->hasFile('poto_produk')) {
        //     $request->file('poto_produk')->move('poto_produk/', $request->file('poto_produk')->getClientOriginalName());
        //     $produk->poto_produk = $request->file('poto_produk')->getClientOriginalName();
        // }
        $produk->save();
    }
}
