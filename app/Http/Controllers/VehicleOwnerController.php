<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repair;

class VehicleOwnerController extends Controller
{
    //
    function getVehicleOwnerProfile($id){
      $voprofile = User::findOrFail($id);

      return view('vehicle_owner/vehicleownerprofile', ['voprofile' => $voprofile]);
    }

    function searchMechanic()
    {
      // Vehicle owners mech search


      // dd($searchResults);
      //['searchResults' => $searchResults]



      $location = $_GET['location'];
      $searchResults = User::where('location', $location) ->where('role', 'mechanic')->get();
      return view('vehicle_owner/search_results', ['searchResults' => $searchResults]);



    }

  public function requestMechanic($id)
    {
      // code...
      return view('vehicle_owner/requestpage', ['mechId' => $id]);


    }

    function getUserHistory($id)
    {
      // Get repair History
    $history = Repair::where('vehicle_owner_id', $id) ->where('completion_status', 'complete')->get();


      return view('vehicle_owner/user-repair-history', ['history' => $history]);
    }

    function getUserActiveRepairs($id)
    {
      // Get user active repairs
    $history = Repair::where('vehicle_owner_id', $id) ->where('acceptance_status', 'accepted') ->where('completion_status', 'ongoing')->get();


      return view('vehicle_owner/user-active-repairs', ['history' => $history]);
    }

    function getUserDashboard()
    {

      $id = auth()->user()->id;
      return view('vehicle_owner/user-dashboard', ['id' =>$id]);
    }

    function getuserPendingRepairs($id)
    {
      // code...
      $pending = Repair::where('vehicle_owner_id', $id) ->where('acceptance_status', 'pending')->get();
      return view('vehicle_owner/user-pending-requests', ['pending' => $pending]);
    }


}
