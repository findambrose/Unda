@extends('layouts\app');

@section('content')

<div class="card">
  <div style="background-color: " #E55812"" class="card-header">
    Search Result
  </div>

  <div class="card-body">
    @if(!empty($searchResult))

        @foreach($searchResults as $searchResult)

        <div style="background-color:  " class="card-body">
              <h4>Mechanic Details</h4>
              <ul>
                <li>Name: {{$searchResult->name}}</li>
                <li>Specialization: {{$searchResult->specialization}}</li>
                <li>Experience (Years): {{$searchResult->experience}}</li>
              </ul>

              <button type="button" style="border-color: #95C623; background-color: #95C623
              " class="btn btn-primary" onclick="window.location='{{route('reqMechanic', $searchResult->id )}}'" name="button">Request</button>

        </div>
        @endforeach

      @else
        <p>We are sorry we couldn't locate any mechanics around you. Please check our expert system for help.</p>
        <button class="btn btn-primary" type="" onclick="window.location='/'" name="" >Change location</button>
      @endif
  </div>
</div>
<div class="search-results">




</div>

@endsection
