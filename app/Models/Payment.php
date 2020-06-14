<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';


    protected $guarded = ['id'];

    public function user() {
        return $this->hasOne('App\Models\User');
    }

}
