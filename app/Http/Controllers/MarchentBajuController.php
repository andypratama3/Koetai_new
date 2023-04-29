<?php

namespace App\Http\Controllers;

use App\Models\Marchent;
use Illuminate\Http\Request;

class MarchentBajuController extends Controller
{
    public function index(){
        $no = 1;
        $baju = Produk::all();
        return view('admin.shop.baju.index', compact('baju','no'));
    }
}
