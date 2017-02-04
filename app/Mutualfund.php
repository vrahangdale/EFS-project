<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'name',
        'fund_name',
        'purchase_price',
        'purchased_date',


    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}