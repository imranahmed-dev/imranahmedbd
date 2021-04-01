<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientSay;
use Validator;

class ClientSayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['clientsays'] = ClientSay::latest()->get();
        return view('backend.clientsay.index-clientsay', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clientsay.create-clientsay');
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
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $clientsay = new ClientSay;
        $clientsay->type                   = $request->type;
        $clientsay->name                   = $request->name;
        $clientsay->description            = $request->description;
        $clientsay->designation            = $request->designation;

        // Image
        $image = $request->file('image');
        if ($image) {
            /*$image_path = public_path($clientsay->image);
            @unlink($image_path);*/
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/clientsay'), $imageName);
            $clientsay->image = '/uploaded/clientsay/' . $imageName;
        }

        $clientsay->save();

        $notification = array(
            'message' => 'Client say created successfully!',
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
        $data['clientsay'] = ClientSay::find($id);
        return view('backend.clientsay.show-clientsay', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['clientsay'] = ClientSay::find($id);
        return view('backend.clientsay.edit-clientsay', $data);
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
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $clientsay = ClientSay::find($id);
        $clientsay->type                   = $request->type;
        $clientsay->name                   = $request->name;
        $clientsay->description            = $request->description;
        $clientsay->designation            = $request->designation;

        // Image
        $image = $request->file('image');
        if ($image) {
            $image_path = public_path($clientsay->image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/clientsay'), $imageName);
            $clientsay->image = '/uploaded/clientsay/' . $imageName;
        }

        $clientsay->save();

        $notification = array(
            'message' => 'Client say updated successfully!',
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
        $clientsay = ClientSay::find($id);
        $image_path = public_path($clientsay->image);
        @unlink($image_path);
        $clientsay->delete();

        $notification = array(
            'message' => 'Client say deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
