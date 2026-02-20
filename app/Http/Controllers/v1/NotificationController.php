<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function delete(Request $request)
    {
         Notification::whereId($request->id)->delete();
         return redirect()->back();
    }

    public function updateNotificationsStatus(){
      Notification::where('user_id',Auth::user()->id)->update(['status'=> 0]);        
    }

    public function store(Request $request)
     {
         $request->validate(['title' => 'required|string|min:6','description'=>'required|min:10|string']);
         Notification::where('user_id', $request->id)->create([
          'user_id' => $request->id,
          'title' => $request->title,
          'description' => $request->description,
          'status' => 1
         ]);
         return redirect()->back()->with('StoreNotification','Your notification has successfully sent');
     }
}
