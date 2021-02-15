<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Team;

class TeamController extends Controller
{

    public function add_workforce(){
    	return view('team.addTeam');
    }

    public function addWorkforce(Request $request){

		$request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'middle_name' => 'required',
			'age' => 'required',
			'contact_number' => 'required',
			'address' => 'required',
		]);

    	Team::create([
			'first_name'=> $request['first_name'],
			'last_name'=> $request['last_name'],
			'middle_name'=> $request['middle_name'],
			'position'=> $request['position'],
			'age'=> $request['age'],
			'gender'=> $request['gender'],
			'birth_month'=> $request['birth_month'],
			'birth_day'=> $request['birth_day'],
			'birth_year'=> $request['birth_year'],
			'contact_number'=> $request['contact_number'],
			'address'=> $request['address'],
			'resume_file'=> $request['resume_file'],
		]);

	   	return redirect('team')-> with('success','Project Saved');
	}
	
	public function employeeList(){
		return view('team.employeeList', [
			'teams'=> Team::all(),
		]);
	}

	public function myTeam(){
    	return view('clientSide.clientsTeam');
    }
	
}
