<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    protected $fillable = [
        'name', 'category', 'image','url','description'
    ];

}
