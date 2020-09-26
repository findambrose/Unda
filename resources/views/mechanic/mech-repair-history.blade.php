@extends('layouts\app-mech')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Repair History</div>

                  <div class="card-body">
                    <?php if (!empty($history[0])): ?>

                      @foreach($history as $record)
                          <div class="">

                            <table class="table">

                                <tr>
                                  <!-- fields in th are bold by default td defines table data -->
                                  <th>Repair Name</th>
                                  <th>Vehicle Desc</th>
                                  <th>Address Desc</th>
                                  <th>Completion Status</th>
                                </tr>

                                <tr>
                                  <td>{{$record->id}}</td>
                                  <td>{{$record->vehicle_desc}}</td>
                                  <td>{{$record->address_desc}}</td>
                                  <td>{{$record->completion_status}}</td>
                                </tr>

                          </table>



                          </div>

                      @endforeach
                    <?php else: ?>
                      <div class="">
                        <p>You have no recent repairs. Your completed repairs will appear here.</p>
                      </div>

                    <?php endif; ?>

                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
