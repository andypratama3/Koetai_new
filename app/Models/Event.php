<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use \App\Http\Traits\UsesUuid;

    use HasFactory;
    protected $table = 'events';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'desc',
        'gambar',
    ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value).'-'.Str::random(4);
    }
}
