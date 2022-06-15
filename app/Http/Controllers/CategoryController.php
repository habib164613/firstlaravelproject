<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Str;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= category::with('sub_categories')->orderBy('order_by' , 'asc')->get();
        return view('backend.pages.modules.category.index', compact('categories'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        $data=$request->all();
        $category= Category:: latest()->first();
        if($category){
            $data['slug_id']= $category->slug_id + 1;
        }else{
            $data['slug_id'] =100000;
        }

        $data['slug'] = Str::slug($request->input('slug'));

        Category::create($data);

        session()->flash('mgs','Category Create successfully');
        session()->flash('class','warning');
        return redirect()->route('category.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view('backend.pages.modules.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('backend.pages.modules.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
       $category->update($request->all());
       session()->flash('mgs','Category updated successfully');
       session()->flash('class','success');
       return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
      $category->delete();
      session()->flash('mgs','Category deleted successfully');
      session()->flash('class','warning');
      return redirect()->route('category.index');
    }
}
