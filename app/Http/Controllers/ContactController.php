<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;
use App\Models\SubjectContact;

class ContactController extends Controller
{
    public function show() {
        $subjects = SubjectContact::all();

        return view('site.contact', [
            'title' => 'Contato',
            'subjects' => $subjects
        ]);
    }
    public function save(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'tel' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        SiteContact::create($request->all());
    }
}
