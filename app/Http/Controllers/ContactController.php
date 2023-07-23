<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function editContact(){
        $contact = Contact::all();
        return view('admin.contact.edit_contact',[
            'contact'=>$contact
        ]);
    }
    public function updateContact(Request $request){
        Contact::updateContact($request);
        return back()->with('success','contact updated!');
    }
}
