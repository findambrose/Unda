@extends('layouts\app');

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Send Request</div>

            <div class="card-body">

              <form action="{{route('sendRequest', $mechId)}}" method="post">
                @csrf
                <input type="hidden" name="acceptance_status" value="pending">
                <!-- <input type="hidden" name="id" value="{{$mechId}}"> -->
                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right" for="vehicle_desc">Vehicle Description</label>

                  <div class="col-md-4">
                    <input class="form-control" type="text" name="vehicle_desc" value="" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right" for="prob_desc">Describe Problem</label>

                  <div class="col-md-4">
                    <input class="form-control" type="text" name="prob_desc" value="" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right" for="address_desc">Describe Address</label>

                  <div class="col-md-4">
                    <input class="form-control" type="text" name="address_desc" value="" required>
                </div>
                </div>

                <div class="form-group row">

                  <h5 class="col-md-4 col-form-label text-md-right"> Select Repair Type(s)</h5>

                  <div class="col-md-4">
                      <input type="checkbox" name="prob_type[]" value="engine">  &nbsp; Engine</input> <br>
                      <input type="checkbox" name="prob_type[]" value="tyre">&nbsp; Tyre</input> <br>

                      <input type="checkbox" name="prob_type[]" value="body">&nbsp; Body</input> <br></div>

                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" style=" border-color: #95C623;background-color: #95C623
" class="btn btn-primary">
                            Send Request
                        </button>
                    </div>
                </div>

              </form>
            </div>

            </div>
        </div>
    </div>
</div>


<div class="card-body">


</div>

@endsection
