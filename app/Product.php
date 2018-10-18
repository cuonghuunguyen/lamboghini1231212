<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'size_id', 'category_id',
    ];

    public function discounts (){
        return $this->hasMany('App\Discount');
    }
    
    public function category (){
        return $this->belongsTo('App\Category');
    }
    
    public function size (){
        return $this->belongsTo('App\Size');
    }
    
    public function bill_details (){
        return $this->hasMany('App\BillDetail');
    }
    
    public function reviews (){
        return $this->hasMany('App\Review');
    }
    
}
