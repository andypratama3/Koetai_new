<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use \App\Http\Traits\UsesUuid;

    use HasFactory;
    protected $table = 'produks';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'harga',
        'stock',
        'kategori_id',

    ];


    public function kategori(){
        return $this->hasOne(Kategori::class, 'id', 'kategori_id');
    }

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value).'-'.Str::random(4);
    }
}
