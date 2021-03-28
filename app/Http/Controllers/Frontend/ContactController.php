<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Validator;

class ContactController extends Controller
{
    public function contactStore(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $contact = new Contact;
        
        $contact->name                  = $request->name;
        $contact->email                 = $request->email;
        $contact->subject               = $request->subject;
        $contact->message               = $request->message;

        $contact->save();

        $notification = array(
            'message' => 'Successfully Send Your Message!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
