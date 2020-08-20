@extends('layouts.app');

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">User Repair History</div>

                  <div class="card-body">

                    <?php if (!empty($history)): ?>
                      @foreach($history as $record)
                          <div class="">
                          Repair Number:  {{$record->id}}
                          Vehicle Desc:  {{$record->vehicle_desc}}
                          Address Desc:  {{$record->address_desc}}
                          Completion Status:  {{$record->completion_status}}
                          </div>

                      @endforeach
                    <?php else: ?>
                      <div class="">
                        <p>You have no recent repairs. Request a mechanic to get started.</p>
                      </div>

                    <?php endif; ?>

                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
