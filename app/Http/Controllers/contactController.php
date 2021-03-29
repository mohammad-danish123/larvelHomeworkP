<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    //
    public function getAllContacts(){
        $contacts = Contact::all();
        return view('crud',compact('contacts'));
    }
}
