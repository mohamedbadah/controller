<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('layout.contact-list', compact('contacts'));
    }
    public function contact()
    {
        return view('layout.contact');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->fName = $request->firstName;
        $contact->lName = $request->lastName;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back();
    }
    public function del($id)
    {
        $del = Contact::find($id);
        $del->delete();
        return redirect()->back();
    }
    public function Edit($id)
    {
        $contacts = Contact::find($id);
        return view('layout.edit', ['contacts' => $contacts]);
    }
    public function update(Request $request)
    {
        $edit = Contact::find($request->id);
        $edit->fName = $request->fNames;
        $edit->lName = $request->lNames;
        $edit->email = $request->emails;
        $edit->save();
        return redirect(' ');
    }
}
