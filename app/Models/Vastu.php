<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vastu extends Model
{
    protected $table = 'vastus';

    protected $guarded = ['id'];
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'orderID',
        'email',
        'phone',
        'pob',
        'dob',
        'cob',
        'tob',
        'gender',
        'amount',
        'paymenttype',
        'paymentstatus',
        'reftype',
        'refdetails',
        'comments',
        'filenames',
        'razorpayOrderId',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
