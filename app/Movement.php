<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $table = 'movements';

    protected $fillable = ['wallet_id', 'amount', 'description'];

    public function wallet()
    {
        return $this->belongnsTo('App\Wallet');
    }
}
