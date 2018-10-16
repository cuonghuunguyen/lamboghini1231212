<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description','price','category_id'
    ];
    
    public function category() 
    {
        return $this->belongsTo('App\Category');
    }
    
    public function bill_details()
    {
        return $this->hasMany('App\BillDetail');
    }
    
    public function discounts()
    {
        return $this->hasMany('App\Discount');
    }
}

