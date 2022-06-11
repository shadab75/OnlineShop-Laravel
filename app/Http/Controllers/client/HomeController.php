<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\FeatureCategory;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

        public function index(Product $product)
    {

        return view('client.home',[
            'products'=>Product::all(),
            'sliders'=>Slider::all(),
            'featuredCategory'=>FeatureCategory::getCategory()

        ]);
//            'categories'=>Category::query()->where('category_id',null)->get(),
//            'brands'=>Brand::all()
            //see app service provider in providers folder

    }

}
