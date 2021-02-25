<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Models\User;
use App\Models\Team;
use App\Models\RequestEmployee;
use App\Models\Task;
use App\Models\RequestEquipment;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewProject;
use App\Notifications\Response;
use App\Notifications\AcceptProject;
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
			'project_status' => 'pending',
		]);
		
		$user = User::find($engr_id[0]);
		
		//passing of data to protected variable in construct (parameter of Notification)
		$message = "Admin has given you a project";
		$project_id = $project->id;
		$creator = User::findOrFail(Auth::id());
		
		Notification::send($user, new NewProject($message,$project_id,$creator->firstName));
	   	return back()-> with('message','Project Saved');
	}


	public function displayPending() {

    	return view('project module.pending', [
 			'projects' => Project::where('project_status','pending')->get(), 'users'=> User::where('user_type','Engineer')->get(),
		]);

    }


	public function displayOngoing() {

    	return view('project module.ongoing', [
 			'projects' => Project::where('project_status','ongoing')->get(), 'users'=> User::where('user_type','Engineer')->get(),
		]);

    }

	
    public function displayOutgoing() {

    	return view('project module.outgoing', [
    		'projects' => Project::where('project_status','outgoing')->get(), 'users'=> User::where('user_type','Engineer')->get(),
    	]);
	}
	

	public function archive_projects(){
    	return view('project module.archive', [
			'users'=> User::where('user_type','Engineer')->get()
		]);
	}


	public function projectStatus() {
		// \
		return view('project module.ganttAll', [
			'users'=> User::where('user_type','Engineer')->get(),
		]);
    }
	
	
	public function myOngoing(){
		$user = Auth::id();
    	return view('clientSide.clientsOngoing', [
			'projects'=> Project::where('project_engineer_id', "$user")->where('project_status','ongoing')->get(),
		]);
	}

	
	public function manageProjects(){
        return view('clientSide.mngProjects');
    }


	public function clientsNewProject($notification_id,$project_id)
	{
		$notification = Auth::user()->notifications()->find($notification_id);
		
		$project = Project::find($project_id);

		if($notification){
			$notification->markAsRead();
			return view('clientSide.clientsNewProject',[
				"project" => $project]);
		}
	}
	

	public function employeeRequest(Request $request){
		$count = count($request['type']);
		
			for($i=0; $i<$count; $i++)
				{
					RequestEmployee::create([
						'type' => $request['type'],
						'quantity' => $request['quantity'],
					]);
				}
			return back();
	}


	public function declineProject(Request $request){

		$creator = User::findorfail(Auth::id());
		$reason = $request['reason'];
		$project_id_declined = $request['project_id'];
		$message = "Engr. ". $creator->firstName . " have declined a project.";
		$flag = "declined";
		
		$user = User::all()->where('user_type','admin');
	
		Notification::send($user, new Response($reason,$creator->firstName." ".$creator->lastName,$message,$project_id_declined,$flag));
		return redirect('myOngoing');
	}


	public function acceptProject(Request $request){

		$creator = User::findorfail(Auth::id());
		$project_id_accepted = $request['project_id'];
		$budget = $request['budget'];
		$worker = $request['worker'];
		$message = "Engr. ". $creator->firstName . " have accepted the project.";
		$flag = "accepted";

		$user = User::all()->where('user_type','admin');
	
		Notification::send($user, new AcceptProject($creator->firstName." ".$creator->lastName,$project_id_accepted,$budget,$worker,$message,$flag));
	   	return redirect('myOngoing');
	}

	
	public function engrResponse($notification_id){
		$notification = Auth::user()->notifications()->find($notification_id);
		// dd($notification);
		if($notification){
			$notification->markAsRead();
			return view('project module.engrResponse', compact('notification'));
		}
	}


	public function startProject($project_id){
		$project= Project::find($project_id);
		$project->update(['project_status'=>'ongoing']);
		// dd($project->project_status);
		
		return view('project module.ongoing',[
			'projects' => Project::where('project_status','ongoing')->get(), 'users'=> User::where('user_type','Engineer')->get(),
		]);
	}

	public function moveToOutgoing($project_id){
		$project= Project::find($project_id);
		$project->update(['project_status'=>'outgoing']);
		// dd($project->project_status);
		
		return view('project module.outgoing',[
			'projects' => Project::where('project_status','outgoing')->get(), 'users'=> User::where('user_type','Engineer')->get(),
		]);
	}

}
