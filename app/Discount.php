<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'name', 'product_id', 'discount_persent'
    ];
    
    public function product()
    {
        return $this->belongsTo("App\Product");
    }
}
