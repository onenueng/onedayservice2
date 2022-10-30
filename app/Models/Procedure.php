<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = ['name','clinic_id','active'];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
