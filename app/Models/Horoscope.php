<?php

namespace App;
namespace App\Models;
use App\Payment;

use Illuminate\Database\Eloquent\Model;


class Horoscope extends Model
{
    protected $table = 'horoscopes';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}