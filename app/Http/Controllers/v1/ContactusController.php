<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactusRequest;
use App\Models\Contact;

class ContactusController extends Controller
{
    public function store(ContactusRequest $request)
    {
      Contact::create($request->validated());
      return back()->with('contactuUs','Your message was sent successfully');
    }
}
