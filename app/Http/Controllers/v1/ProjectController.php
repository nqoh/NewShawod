<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
  public function acceptClient(Request $request)
  {
    
    $project_id =  random_int(100000,999999);
    
    $project_folder = public_path('Projects/'.$project_id);
    if(!File::exists($project_folder)){
        File::makeDirectory($project_folder, 0755, true);
        File::copy(public_path('Projects/index.php'), $project_folder.'/index.php');
    }else{
      return redirect()->back()->with('failedToAcceptClient','Failed: Unfortunate stsyem generated folder number that alread exists please try again');
    }
  
    $user = User::whereId($request->userId)->first();
    $password = Str::random(6);
    $user->update(['password' => Hash::make($password)]);
    $user->project()->update(['project_folder_id'=>$project_id]);
    $user->notifications()->create([
      'title'=> 'Welcome to Shawod',
      'description' => 'Thank you for choosing <b>Shawod</b> for your website development.<br>
                         We are thrilled to formally partner with you and we are commited
                         to delivering exceptional result.
                         Our goal is to ensure a smooth, transparent, and successful process.<br><br>
                         <b>Best regards,</b><br>
                         Nqobile Ngobese<br>
                         Web Developer<br>
                        '
    ]);
    
    Mail::to($user->email)->queue(new WelcomeMail($user->email,$password,$user->project->reference,$user->name));
    return redirect()->back()->with('welcome', $user->name.' hase been accepted');
    
  }

  public function updateProgess(Request $request)
  {
    $Project= Project::whereId($request->id)->first();
    $Project->update(['progress'=> $request->progress]);
    return redirect()->back()->with('ProgressUpdate','Progress Updated');
  }
}
