<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Anggota extends Model
{
    use \App\Http\Traits\UsesUuid;

    use HasFactory;
    protected $table = 'Anggotas';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'devisi',
        'poto',
        'ig',
    ];

    // public function setNameAttribute($value) // setXXXAtribute, XXX itu ngikut nama column yg mw diikutin
    // Kalo nama column nya dia nama, jadi setNamaAttribute
    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value).'-'.Str::random(4);
    }
}
