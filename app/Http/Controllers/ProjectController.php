<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\User;
use App\Notifications\ProjectNotification;

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
		
		$engr = User::where('firstName', $request['project_engineer'])->get();
		
		Project::create([
			'project_name'=> $request['project_name'],
			'project_engineer'=> $request['project_engineer'],
			'project_budget'=> $request['project_budget'],
			'project_start_date'=> $request['project_start_date'],
			'project_end_date'=> $request['project_end_date'],
			'project_description'=> $request['project_description'],
			'project_location'=> $request['project_location'],
		]);
		
		
		Notification::send($engr, new ProjectNotification());
	   	return redirect('ongoing_projects')-> with('success','Project Saved');

	   	//Direct assignment of data
	   	//$projects = new Projects;
	   	//$projects->project_name = 'dsfcs';
	   }

	public function displayOngoing() {

    	return view('project module.ongoing', [
 			'projects' => Project::all(), 'users'=> User::where('user_type','Engineer')->get(),
		]);

    }

    public function displayOutgoing() {

    	return view('project module.outgoing', [
    		'projects' => Project::where('project_code','1')->get(), 'users'=> User::where('user_type','Engineer')->get(),
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

}
