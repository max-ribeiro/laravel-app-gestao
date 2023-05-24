<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;

class ContactController extends Controller
{
    public function show(Request $request) {

        $contact = new SiteContact();
        /* $contact->name = $request->input('name');
        $contact->tel =  $request->input('tel');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save(); */
        // $contact->fill($request->all());
        // $contact->save();
        $contact->create($request->all());

        return view('site.contact', ['title' => 'Contato']);
    }
}
