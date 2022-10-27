<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactsController extends Controller
{
    public function contactsSave(Request $request)
    {
        $Email = Contact::where(['Email'=>$request->Email])->first();

        if(empty($Email)){
        Contact::create([
            'Name'=> $request->Name,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'Message' => $request->Message
        ]);
        }
    }
}
