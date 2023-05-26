<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectContact;

class MainController extends Controller
{
    public function main() {
        $subjects = SubjectContact::all();
        return view('site.main', ['title' => 'Home', 'subjects' => $subjects]);
    }
}
