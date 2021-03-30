<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Validator;
use Mail;

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
        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->message,
        );
        
        Mail::send('frontend.email.contact',$data, function($message) use($data) {
            $message->from('imranahmed.developer@gmail.com', 'Developer Imran');
            $message->to($data['email']);
            $message->subject('Thanks for contact me!');
        });
        
        

        $notification = array(
            'message' => 'Successfully Send Your Message!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
