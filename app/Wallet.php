<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallet';

    protected $fillable = ['user_id', 'amount'];

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }

    public function movements()
    {
        return $this->hasMany('App\Movement');
    }
}
