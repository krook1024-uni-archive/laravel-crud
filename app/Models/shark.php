<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shark extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'id', 'image_id');
    }
}
