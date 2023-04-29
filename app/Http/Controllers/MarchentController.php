<?php

namespace App\Http\Controllers;

use App\Models\Marchent;
use Illuminate\Http\Request;
use App\Http\Requests\MarchentRequest;
use App\Action\Marchent\MarchentActionStore;

class MarchentController extends Controller
{
    public function index(){
        $no = 1;
        $marchent = Marchent::all();
        return view('admin.shop.index', compact('marchent','no'));
    }

    public function create(){

        return view('admin.shop.create');
    }
    public function store(MarchentRequest $request, MarchentActionStore $MarchentActionStore){

        $MarchentActionStore->execute($request);
        return redirect()->route('admin.marchent.index')->with('success', 'Marchent Berhasil Di Tambah');
    }
    // public function how




}
