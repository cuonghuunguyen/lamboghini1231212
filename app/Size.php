<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'width', 'length', 'thickness',
    ];

    public function products (){
        return $this->hasMany('App\Product');
    }
}
