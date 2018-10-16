<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'customer_name', 'customer_phone','customer_email'
    ];
    
    public function bill_details()
    {
        return $this->hasMany('App\BillDetail');
    }
}
