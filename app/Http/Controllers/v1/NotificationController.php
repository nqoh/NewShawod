<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function delete(Request $request)
    {
         Notification::whereId($request->id)->delete();
         return redirect()->back();
    }
}
