<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contacts = Contact::where('user_id', Auth::user()->id)->get();
        return view('layout.contact-list', compact('contacts'));
    }
    public function contact()
    {
        return view('layout.contact');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required|min:5',
            'lastName' => 'required',
            'email' => 'required'
        ]);
        $contact = new Contact();
        $contact->fName = $request->firstName;
        $contact->lName = $request->lastName;
        $contact->email = $request->email;
        $contact->user_id = Auth::user()->id;
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
