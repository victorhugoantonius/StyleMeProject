<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',  
    ];

    public function booking_details(){
        return $this->hasMany(BookingDetail::class);
    }
}
