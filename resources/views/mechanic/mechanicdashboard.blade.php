@extends('layouts.app-mech')


@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Mechanic Dashboard</div>

                  <div class="card-body">
                    <button type="button" onclick="window.location='{{route('mechProfile', $id )}}'" style="margin-right:10px" class="btn btn-primary" name="button">View Profile</button>
                    <button type="button" onclick="window.location='{{route('pendingRepairs')}}'" style="margin-right:10px" class="btn btn-primary" name="button">Pending Requests</button>
                    <button type="button" onclick="window.location='{{route('repairHistory', $id )}}'" style="margin-right:10px" class="btn btn-primary" name="button">Repair History</button>
                    <button type="button" onclick="window.location='{{route('mechanicActiveRepairs', $id )}}'" class="btn btn-primary" name="button">Active Repairs</button>



                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
