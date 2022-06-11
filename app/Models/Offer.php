<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded=[];
    protected $dates =['starts_at','expires_at'];


    use HasFactory;
}
