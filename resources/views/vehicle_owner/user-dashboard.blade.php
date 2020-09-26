@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                  <button type="button" onclick="window.location='{{route('vOwnerProfile')}}'" style="margin-right:10px" class="btn btn-primary" name="button">View Profile</button>
                  <button type="button" onclick="window.location='{{route('userPendingRepairs')}}'" style="margin-right:10px" class="btn btn-primary" name="button">Pending Requests</button>
                  <button type="button"  onclick="window.location='{{route('userRepairHistory')}}'" style="margin-right:10px" class="btn btn-primary" name="button">Order History</button>
                  <button type="button" onclick="window.location='{{route('userActiveRepairs')}}'" class="btn btn-primary" name="button">Active Repairs</button>

                  <!-- <a href="/mechanic/profile/{$id}">View Profile</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
