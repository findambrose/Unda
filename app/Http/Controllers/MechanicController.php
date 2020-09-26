<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Repair;

class MechanicController extends Controller
{
    //
    function getProfile(){

      $id = Auth::user()->id;
      $profileInfo = User::find($id);

      return view('mechanic/mechanicprofile', ['profileInfo' => $profileInfo ]);
    }
    function returnDashboard(){
      $id = Auth::user()->id;
      return view('mechanic/mechanicdashboard' , ['id' => $id]);
    }

    function getMechanicHistory($id)
    {
      // Get repair History
      $id = Auth::user()->id;
      $history = Repair::where('mechanic_id', $id) ->where('completion_status', 'complete')->get();
      return view('mechanic/mech-repair-history', ['history' => $history]);
    }

    function getMechanicActiveRepairs()
    {
      // Get active History
      $id = Auth::user()->id;
      $history = Repair::where('mechanic_id', $id) ->where('acceptance_status', 'accepted') ->where('completion_status', 'ongoing')->get();
      return view('mechanic/mechanic-active-repairs', ['history' => $history]);
    }

}
