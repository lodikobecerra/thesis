<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Models\Team;

class ProjectController extends Controller
{

    public function archive_projects(){
    	return view('project module.archive');
    }

	public function addProject(Request $request){
		//db direct insert
	   	//$project_code = $request->input('project_code');
	   	// $project_name = $request->input('project_name');
	   	// $project_client = 'DPWH';
	   	// $project_engineer = $request->input('project_engineer');
	   	// $project_budget = $request->input('project_budget');
	   	// $project_start_date = $request->input('project_start_date');
	   	// $project_end_date = $request->input('project_end_date');
	   	// $project_description = $request->input('project_description');
	   	// $project_location = $request->input('project_location');

	   	// DB::insert('insert into projects(project_name,project_client,project_engineer,project_budget,project_start_date,project_end_date,project_description,project_location)  values (?,?,?,?,?,?,?,?)', [$project_name, $project_client, $project_engineer, $project_budget, $project_start_date, $project_end_date, $project_description, $project_location]);
		
		//eloquent insert
		$project_engineer_id = explode(".", $request['project_engineer']);
		Project::create([
			'project_name'=> $request['project_name'],
			'project_engineer'=> $project_engineer_id[0],
			'project_budget'=> $request['project_budget'],
			'project_start_date'=> $request['project_start_date'],
			'project_end_date'=> $request['project_end_date'],
			'project_description'=> $request['project_description'],
			'project_location'=> $request['project_location'],
		]);

	   	return redirect('ongoing_projects')-> with('success','Project Saved');

	   	//Direct assignment of data
	   	//$projects = new Projects;
	   	//$projects->project_name = 'dsfcs';
	   }

	public function displayOngoing() {

    	return view('project module.ongoing', [
 			'projects' => Project::all(), 'teams'=> Team::where('position','Engineer')->get(),
		]);

    }

    public function displayOutgoing() {

    	return view('project module.outgoing', [
    		'projects' => Project::where('project_code','1')->get(),
    	]);
    }
}
