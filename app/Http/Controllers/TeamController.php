<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Team;
use App\Models\Position;

class TeamController extends Controller
{

	public function team(){
    	return view('team.team',  [
			'positions'=> Position::all()
		]);
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
			'status' => 'available',
			'resume_file'=> $request['resume_file'],
		]);

	   	return redirect('employeeList')-> with('success','Project Saved');
	}
	
	public function employeeList(){
		return view('team.employeeList', [
			'teams'=> Team::all(), 'positions'=> Position::all(),
		]);
	}

	public function foreman(){
		return view('team.viewForeman', [
			'teams'=> Team::where('position','Foreman')->get(), 'positions'=> Position::all(),
		]);
	}

	public function mason(){
		return view('team.viewMason', [
			'teams'=> Team::where('position','Mason')->get(), 'positions'=> Position::all(),
		]);
	}
	
	public function labor(){
		return view('team.viewLabor', [
			'teams'=> Team::where('position','Labor')->get(), 'positions'=> Position::all(),
		]);
	}

	public function welder(){
		return view('team.viewWelder', [
			'teams'=> Team::where('position','Welder')->get(), 'positions'=> Position::all(),
		]);
	}

	public function paintor(){
		return view('team.viewPaintor', [
			'teams'=> Team::where('position','Paintor')->get(), 'positions'=> Position::all(),
		]);
	}

	public function skilledWorker(){
		return view('team.viewSkilledWorker', [
			'teams'=> Team::where('position','Skilled Worker')->get(), 'positions'=> Position::all(),
		]);
	}

	public function backhoeOperator(){
		return view('team.viewBackhoeOperator', [
			'teams'=> Team::where('position','Backhoe Operator')->get(), 'positions'=> Position::all(),
		]);
	}

	public function payloaderOperator(){
		return view('team.viewPayloaderOperator', [
			'teams'=> Team::where('position','Payloader Operator')->get(), 'positions'=> Position::all(),
		]);
	}
	
	public function truckDriver(){
		return view('team.viewTruckDriver', [
			'teams'=> Team::where('position','Truck Driver')->get(), 'positions'=> Position::all(),
		]);
	}

	public function getEmployeeDetails($employee_num){
		$employee = Team::find($employee_num);
		return view('team.viewEmployee', [
			"employee" => $employee, 'positions'=> Position::all()
			]);
	}

	public function myTeam(){
    	return view('clientSide.clientsTeam');
    }
	
}
