<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Repair;

class VehicleOwnerController extends Controller
{

  //  Constructor to initialise auth middleware in class
    // public function __construct(){
    //   $this->middleware('auth');
    // }
    //
    function getVehicleOwnerProfile(){
      $id = Auth::user()->id;
      $voprofile = User::findOrFail($id);

      return view('vehicle_owner/vehicleownerprofile', ['voprofile' => $voprofile]);
    }

    function searchMechanic()
    {
      // Vehicle owners mech search


      // dd($searchResults);
      //['searchResults' => $searchResults]




      $searchResults = User::where('county', request('county'))->where('town', request('town'))->where('role', 'mechanic')->get();
      return view('vehicle_owner/search_results', ['searchResults' => $searchResults]);



    }

  public function requestMechanic($id)
    {
      // code...
      return view('vehicle_owner/requestpage', ['mechId' => $id]);
    }
    function getUserHistory()
    {
      // Get repair History
    $id = Auth::user()->id;
    $history = Repair::where('vehicle_owner_id', $id) ->where('completion_status', 'complete')->get();

    return view('vehicle_owner/user-repair-history', ['history' => $history]);
    }

    function getUserActiveRepairs()
    {
      // Get user active repairs
    $id = auth()->user()->id;
    $history = Repair::where('vehicle_owner_id', $id) ->where('acceptance_status', 'accepted') ->where('completion_status', 'ongoing')->get();


      return view('vehicle_owner/user-active-repairs', ['history' => $history]);
    }

    function getUserDashboard()
    {

      $id = auth()->user()->id;
      return view('vehicle_owner/user-dashboard', ['id' =>$id]);
    }

    function getuserPendingRepairs()
    {
      // code...
      $id = auth()->user()->id;
      $pending = Repair::where('vehicle_owner_id', $id) ->where('acceptance_status', 'pending')->get();
      return view('vehicle_owner/user-pending-requests', ['pending' => $pending]);
    }


}
