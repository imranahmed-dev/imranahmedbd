<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Validator;

class BlogCategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BlogCategory::latest()->get();
        return view('backend.blogcategory.index-blogcategory', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name_en' => 'required|unique:blog_categories,category_name_en',
            'category_name_bn' => 'required|unique:blog_categories,category_name_bn',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new BlogCategory;
        $data->category_name_en = $request->category_name_en;
        $data->category_name_bn = $request->category_name_bn;
        $data->slug_en = Str::slug($request->category_name_en);
        $data->slug_bn = Str::slug($request->category_name_bn);
        $data->save();
        
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BlogCategory::find($id);
        return view('backend.blogcategory.edit-blogcategory', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name_en' => 'required|unique:blog_categories,category_name_en,'.$id,
            'category_name_bn' => 'required|unique:blog_categories,category_name_bn,'.$id,
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = BlogCategory::find($id);
        $data->category_name_en = $request->category_name_en;
        $data->category_name_bn = $request->category_name_bn;
        $data->slug_en = Str::slug($request->category_name_en);
        $data->slug_bn = Str::slug($request->category_name_bn);
        $data->save();
        
        $notification = array(
            'message' => 'Blog Category updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BlogCategory::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Category deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
