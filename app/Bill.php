<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_phone',
    ];

    public function bill_details () {
        return $this->hasMany('App\BillDetail');
    }
}
