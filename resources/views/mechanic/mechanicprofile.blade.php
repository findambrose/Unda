@extends('layouts.app-mech')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card">
          <div class="card-header">Mechanic Profile</div>

          <div class="card-body">
            <ul>
              <li>Name - {{$profileInfo->name}} </li>
              <li>Email Address - {{$profileInfo->email}} </li>
              <li>Phone - {{$profileInfo->phone}} </li>
              <li>Location - {{$profileInfo->location}} </li>
              <li>My Role - {{$profileInfo->role}} </li>
            </ul>

            <button class="btn btn-primary" type="button" onclick="window.location="{{route('mechDashboard')}}"" name="button">Back</button>



          </div>
    </div>
</div>
</div>

@endsection
