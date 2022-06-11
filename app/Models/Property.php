<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Property extends Model
{
    protected $guarded=[];

    public function propertyGroup()
    {
        return $this->belongsTo(PropertyGroup::class);

    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot(['Value'])
            ->withTimestamps();
    }

    public function getValueForProduct(Product $product)
    {

    $productPropertyQuery=$this->products()->where('product_id',$product->id);

    if (!$productPropertyQuery->exists()){
        return null;
    }
   Return $productPropertyQuery->first()->pivot->Value;
    }

    use HasFactory;
}
