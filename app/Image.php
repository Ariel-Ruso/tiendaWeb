<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable= ['path'];

    public function getUrlPathAttribute()
    {
        return Storage::url('fruta1.jpg');
    }
}
