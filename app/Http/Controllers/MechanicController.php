<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Repair;

class MechanicController extends Controller
{
    //
    function getProfile($id){


      $profileInfo = User::find($id);

      return view('mechanicprofile', ['profileInfo' => $profileInfo ]);


    }
    function returnDashboard(){

      $id = Auth::user()->id;

      return view('mechanicdashboard' , ['id' => $id]);

    }

    function getMechanicHistory($id)
    {
      // Get repair History
    $history = Repair::where('mechanic_id', $id) ->where('completion_status', 'complete')->get();


      return view('mech-repair-history', ['history' => $history]);
    }

    function getMechanicActiveRepairs($id)
    {
      // Get mechanic repair History
    $history = Repair::where('mechanic_id', $id) ->where('acceptance_status', 'accepted') ->where('completion_status', 'ongoing')->get();


      return view('mechanic-active-repairs', ['history' => $history]);
    }

}
