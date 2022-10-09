<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','active'];

    Public function Proceudre()
    {
        return $this->belongsTo(Procedure::Class);
    }
}
