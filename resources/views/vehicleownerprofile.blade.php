@extends('layouts\app');

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card">
          <div class="card-header">User Profile</div>

          <div class="card-body">
            <ul>
              <li>Name - {{$voprofile->name}} </li>
              <li>Email Address - {{$voprofile->email}} </li>
              <li>Phone - {{$voprofile->phone}} </li>
              <li>Location - {{$voprofile->location}} </li>
              <li>My Role - {{$voprofile->role}} </li>
            </ul>

            <button class="btn btn-primary" type="button" onclick="window.location = '{{route('userDashboard')}}'" name="button">Back</button>



          </div>
    </div>
</div>
</div>

@endsection
