<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Repair;

class RepairController extends Controller
{
    //
     function sendRepairRequest($id){

      //GET POST Repair Information
      $address_desc = request('address_desc');
      $prob_desc = request('prob_desc');
      $vehicle_desc = request('vehicle_desc');
      $repair_type =request('prob_type');
      $acceptance_status =request('acceptance_status');



      //get logged in/ vehicle owner $id

    // to be used later  $vOwnerId = auth()->user()->id;



       //save INFO to repairs table
       $repair = new Repair();

       $repair->vehicle_desc = $vehicle_desc;
       $repair->mechanic_id = $id;
      // to be implemented baadae $repair->vehicle_owner_id = $id;
       $repair->address_desc = $address_desc;
       $repair->prob_desc = $address_desc;
       $repair->repair_type = $repair_type;
       $repair->acceptance_status = $acceptance_status;
       $repair->save();

       return redirect('/')->with('thanks', 'Thank you. Request sent. The mechanic will get in touch. Reload to clear this msg');



    }

function getPendingRepairs()  //TODO: Move this method to MechanicsController
{
  // code...

  $id = auth()->user()->id;
  $pending = Repair::where('mechanic_id', $id) ->where('acceptance_status', 'pending')->get();
  return view('/mechanic/mech-pending-requests', ['pending' => $pending]);
}

function acceptRepairRequest($id)
{
  //set acceptance_status to accepted and completion_status as ongoing

  //1. Get post data
  $acceptance_status = request('acceptance_status');
  $completion_status = request('completion_status');

  //2. set

  $repair = new Repair();

  $repair->where($id)->acceptance_status = $acceptance_status;
  $repair->where($id)->completion_status = $completion_status;
  $repair->update();


}

function rejectRepairRequest($id)
{
  //set acceptance_status to rejected

  //1. Get post data
  $acceptance_status = request('acceptance_status');

  //2. set
  $repair = new Repair();
  $repair->where($id)->acceptance_status = $acceptance_status;
  $repair->save();

}

function userCancelRepairRequest($id)
{

  //set acceptance_status to cancelled

  //1. Get post data
  $acceptance_status = request('acceptance_status');


  //2. set

  $repair = new Repair();

  $repair->where($id)->acceptance_status = $acceptance_status;

  $repair->save();


}

}
