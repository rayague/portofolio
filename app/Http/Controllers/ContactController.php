<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.index', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->city = $request->input('city');
        $contact->postalBox = $request->input('postalBox');
        $contact->country = $request->input('country');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->jobTitle = $request->input('jobTitle');
        $contact->save();

        return redirect()->back()->with('status', 'Contact Updated Successfully');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = false;
        $contact->save();

        return redirect()->back()->with('status', 'Contact Deleted Successfully');
    }
}