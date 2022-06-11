<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Picture extends Model
{
    use HasFactory;
    protected $guarded=[] ;

    public function product()
    {
        return $this->belongsTo(Product::class);

    }


}
