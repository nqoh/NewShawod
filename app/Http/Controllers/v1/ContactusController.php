<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactusRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function store(ContactusRequest $request)
    {
      Contact::create($request->validated());
      return back()->with('contactuUs','Your message was sent successfully');
    }

    public function delete(Request $request)
    {
      Contact::whereId($request->id)->delete();
      return back();
    }
}
