<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentRequest;
use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
	//
	
	public function equipments(){
		return view('equipments.equipments', [
			'equipments' => Equipment::all(),
		]);
	}
    
    public function addEquipment(Request $request){

    	Equipment::create([
    		'type' => $request['equipment_type'],
    		'body_number' => $request['body_number'],
    		'status' => $request['status'],
    		'last_location' => $request['last_location'],
    		'operator' => $request['operator'],
    	]);

    	return redirect('equipments')-> with('success','Project Saved');
    }

    public function displayTrucks(Request $user){
		return view('equipments.viewTruck', [
			'equipments' => Equipment::where('type','Truck')->get(),
		]);
    }

    public function displayBackhoe(){
    	return view('equipments.viewBackhoe', [
 			'equipments' => Equipment::where('type','Backhoe Loader')->get(),
    	]);
    }

    public function displayPayLoader(){
    	return view('equipments.viewPayloader', [
 			'equipments' => Equipment::where('type','Payloader')->get(),
    	]);
    }

    public function displayBulldozer(){
    	return view('equipments.viewBulldozer', [
 			'equipments' => Equipment::where('type','Bulldozer')->get(),
    	]);
    }

    public function displayCementMixer(){
    	return view('equipments.viewCementMixer', [
 			'equipments' => Equipment::where('type','Cement Mixer')->get(),
    	]);
    }

    public function displayElf(){
    	return view('equipments.viewElf', [
 			'equipments' => Equipment::where('type','Elf')->get(),
    	]);
    }

    public function displayMotorPool(){
    	return view('equipments.viewMotorPool', [
 			'equipments' => Equipment::where('type','Motor Pool')->get(),
    	]);
    }

    public function displayBatching(){
    	return view('equipments.viewBatching', [
 			'equipments' => Equipment::where('type','Batching')->get(),
    	]);
    }

    public function displayAsphalt(){
    	return view('equipments.viewAsphalt', [
 			'equipments' => Equipment::where('type','Asphalt')->get(),
    	]);
	}
	
	public function myEquipment(){
    	return view('clientSide.clientsEquipment');
    }
}
