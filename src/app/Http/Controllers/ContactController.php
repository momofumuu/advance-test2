<?php

namespace App\Http\Controllers;

use Illuminate\Http\ContactRequest;

class ContactController extends Controller

{
    public function index()
  {
    return view('index');
  }

   public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name','gender','email','postcode','address','building_name','opinion']);
        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name','gender','email','postcode','address','building_name','opinion']);
        Contact::create($contact);

        return view('thanks');
    }
}
