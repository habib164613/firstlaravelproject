<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories= SubCategory::with(['category'])->orderBy('order_by','asc')-> get();
        return view('backend.pages.modules.sub_category.index', compact('sub_categories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categories= Category::pluck('name', 'id');
        return view('backend.pages.modules.sub_category.create', compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
      $sub_category=$request->all();
      $subCategory= subCategory:: latest()->first();
      if($subCategory){
        $sub_Category['slug_id']= $subCategory->slug_id + 1;
      }else{
        $sub_Category['slug_id'] =100000;
      }
      SubCategory::create($sub_category);

      session()->flash('mgs','Sub Category Create successfully');
      session()->flash('class','warning');
      return redirect()->route('sub-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $sub_categories)
    {
        $sub_categories->load('category');
        
        return view('backend.pages.modules.sub_category.show', compact('sub_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $sub_categories)
    {
        $categories= Category::pluck('name', 'id');
        
        return view('backend.pages.modules.sub_category.edit', compact('sub_categories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCategoryRequest  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        $subCategory->update($request->all());
        session()->flash('mgs','Sub Category updated successfully');
        session()->flash('class','success');
        return redirect()->route('sub-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $sub_categories)
    {
        $sub_categories->delete();
        session()->flash('mgs','Sub Category deleted successfully');
        session()->flash('class','warning');
        return redirect()->route('sub-categories.index');
    }
}
