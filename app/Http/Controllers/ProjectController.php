<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewProject;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
	
	public function addProject(Request $request){
		//eloquent insert

		$request->validate([
			'project_name' => 'required',
			'project_budget' => 'required',
			'project_location' => 'required',
			'project_engineer' => 'required',
		]);
		
		// $engr = User::where('firstName', $request['project_engineer'])->get();
		$engr_id = explode(' ',$request['project_engineer']);
		$engr_name = explode(' ',$request['project_engineer']);
		$project = Project::create([
			'project_name'=> $request['project_name'],
			'project_client'=> 'DPWH',
			'project_engineer_id'=> $engr_id[0],
			'project_engineer'=> $engr_name[1].' '.$engr_name[2].' '.$engr_name[3],
			'project_budget'=> $request['project_budget'],
			'project_start_date'=> $request['project_start_date'],
			'project_end_date'=> $request['project_end_date'],
			'project_description'=> $request['project_description'],
			'project_location'=> $request['project_location'],
		]);
		
		$user = User::find($engr_id[0]);

		// auth()->user()->notify(new NewProject());
		
		//passing of data to protected variable in construct (parameter of Notification)
		$message = "Admin has given you a project";
		$project_id = $project->id;
		$creator = "{$user->firstName} {$user->lastName}";

		Notification::send($user, new NewProject($message,$project_id,$creator));
	   	return back()-> with('message','Project Saved');
	}

	 public function sendNotification(Request $request, Project $proj){
		
	}

	public function displayOngoing() {

    	return view('project module.ongoing', [
 			'projects' => Project::all(), 'users'=> User::where('user_type','Engineer')->get(),
		]);

    }

    public function displayOutgoing() {

    	return view('project module.outgoing', [
    		'projects' => Project::where('id','1')->get(), 'users'=> User::where('user_type','Engineer')->get(),
    	]);
	}
	
	public function archive_projects(){
    	return view('project module.archive', [
			'users	'=> User::where('user_type','Engineer')->get()
		]);
	}
	
	public function myOngoing(){
    	return view('clientSide.clientsOngoing');
	}
	
	public function manageProjects(){
        return view('clientSide.mngProjects');
    }

	public function clientsNewProject($notification_id,$project_id)
	{
		$notification = Auth::user()->notifications()->find($notification_id);
		$notification->markAsRead();
		$project = Project::find($project_id);

		return view('clientSide.clientsNewProject',["project" => $project]);
	}

}
