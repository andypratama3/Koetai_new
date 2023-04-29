<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use \App\Http\Traits\UsesUuid;

    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',

    ];



    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value).'-'.Str::random(4);
    }
}
