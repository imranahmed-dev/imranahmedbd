<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Validator;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolios'] = Portfolio::latest()->get();
        return view('backend.portfolio.index-portfolio', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.portfolio.create-portfolio');
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
            'title' => 'required',
            'category' => 'required',
            'website_link' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $portfolio = new Portfolio;
        $portfolio->title                      = $request->title;
        $portfolio->category                   = $request->category;
        $portfolio->website_link               = $request->website_link;
        $portfolio->home                       = $request->home;

        // Image
        $image = $request->file('image');
        if ($image) {
            /*$image_path = public_path($portfolio->image);
            @unlink($image_path);*/
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/portfolio'), $imageName);
            $portfolio->image = '/uploaded/portfolio/' . $imageName;
        }

        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio created successfully!',
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
        $data['portfolio'] = Portfolio::find($id);
        return view('backend.portfolio.show-portfolio', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['portfolio'] = Portfolio::find($id);
        return view('backend.portfolio.edit-portfolio', $data);
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
            'title' => 'required',
            'category' => 'required',
            'website_link' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $portfolio = Portfolio::find($id);
        $portfolio->title                      = $request->title;
        $portfolio->category                   = $request->category;
        $portfolio->website_link               = $request->website_link;
        $portfolio->home                       = $request->home;

        // Image
        $image = $request->file('image');
        if ($image) {
            $image_path = public_path($portfolio->image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/portfolio'), $imageName);
            $portfolio->image = '/uploaded/portfolio/' . $imageName;
        }

        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio updated successfully!',
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
        $portfolio = Portfolio::find($id);
        $image_path = public_path($portfolio->image);
        @unlink($image_path);
        $portfolio->delete();

        $notification = array(
            'message' => 'Portfolio deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
