<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeaturedCategoryRequest;
use App\Models\Category;
use App\Models\FeatureCategory;
use Illuminate\Http\Request;

class FeatureCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.featuredCategory.create',[
            'featuredCategory'=>FeatureCategory::query()->first(),
           'categories'=>Category::query()->where('category_id',null)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(FeaturedCategoryRequest $request)
    {
        FeatureCategory::query()->delete();
        //
        FeatureCategory::query()->create([

            'category_id'=>$request->get('category_id')
        ]);
        return redirect(route('featuredCategory.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureCategory  $featureCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureCategory $featureCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureCategory  $featureCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureCategory $featureCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeatureCategory  $featureCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeatureCategory $featureCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureCategory  $featureCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureCategory $featureCategory)
    {
        //
    }
}
