@extends('layouts.app');

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Pending Requests</div>

                  <div class="card-body">
                    <?php if (!empty($pending[0])): ?>
                       @foreach($pending as $record)
                          <div class="">
                          Repair Number:  {{$record->id}}
                          Vehicle Owner Name (Join Record): Join for Vehicle Owner Name
                          Vehicle Desc:  {{$record->vehicle_desc}}
                          Address Desc:  {{$record->address_desc}}

                          </div>
                          <form class="" action="{{route('cancelRequest', $record->id)}}" method="post">
                            @csrf

                            <input type="hidden" name="acceptance_status" value="cancelled">



                          <button  style="margin-top: 10px" type="submit" class="btn btn-primary" name="button">Cancel Request</button>

                          </form>


                      @endforeach
                    <?php else: ?>
                      <div class="">
                        <p>No pending repair. Your pending requests will appear here.</p>
                      </div>

                    <?php endif; ?>

                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
