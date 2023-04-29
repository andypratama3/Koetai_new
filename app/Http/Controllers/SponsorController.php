<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Requests\SponsorRequest;
use App\Action\Sponsor\SponsorActionStore;
use App\Action\Sponsor\SponsorActionDelete;
use App\Action\sponsor\SponsorActionUpdate;

class SponsorController extends Controller
{
    public function index(){
        $no = 1;
        $sponsor = Sponsor::all();
        return view('admin.sponsor.index',compact('sponsor','no'));
    }

    public function store(SponsorRequest $request, SponsorActionStore $sponsorActionStore){

        $sponsorActionStore->execute($request);
        return redirect()->route('admin.sponsor.index')->with('success','Sponsor Berhasil Di Tambahkan');
    }
    public function edit($slug){

        $sponsor = Sponsor::where('slug', $slug)->firstOrFail();

        return view('admin.sponsor.edit',compact('sponsor'));
    }
    public function update(SponsorRequest $request, SponsorActionUpdate $sponsorActionUpdate,$slug){

        $sponsorActionUpdate->execute($request,$slug);

        return redirect()->route('admin.sponsor.index')->with('success','Sponsor Berhasil Di Update');
    }
    public function destroy(SponsorActionDelete $sponsor,$slug)
    {
        $sponsor->execute($slug);
        return redirect()->route('admin.sponsor.index')->with('delete','Sponsor Berhasil Di Hapus');
    }
}
