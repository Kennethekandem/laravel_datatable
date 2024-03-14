<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    

    public function create(Request $request) {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');
        $contact->occupation = $request->input('occupation');
        $contact->save();

        return response()->json(['message' => 'Contact created'], 200);
    }

    public function fetchAll() {
        $contacts = Contact::all();
        return view('welcome', ['contacts' => $contacts]);
    }

    public function getAll() {
        $contacts = Contact::all();
        return response()->json(["message" => "All contacts", "contacts" => $contacts], 200);
    }

    public function filterBy($paramters) {
        
    }
}
