<?php

namespace App\Action\Sponsor;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorActionDelete
{
    public function execute($slug): void
    {
        $sponsor = Sponsor::where('slug',$slug)->firstOrFail();
        $file = public_path('/foto_sponsor/').$sponsor->gambar;
        if(file_exists($file)){
            @unlink($file);
        }
        $sponsor->delete();
    }
}
