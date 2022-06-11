<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureCategory extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'category_id';
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function getCategory()
    {
        return optional(FeatureCategory::query()->first())->category;
    }
}
