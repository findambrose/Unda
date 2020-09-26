@extends('layouts.app-mech')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Pending Requests</div>

                  <div class="card-body">
                    <?php if (!empty($pending[0])): ?>
                    @foreach($pending as $record)
                      <div style=" padding: 10px 10px 15px 10px ; margin-bottom: 15px; border-radius: 4px; border:  solid 2px grey"class="">
                        <div class="">
                        Repair Number:  {{$record->id}}
                        Vehicle Owner Name (Join Record): Join for Vehicle Owner Name
                        Vehicle Desc:  {{$record->vehicle_desc}}
                        Address Desc:  {{$record->address_desc}}

                        </div >

                      <div style="padding-left: 15px; padding-top: 10px; " class="row">
                        <form class="" action="{{route('acceptRequest', $record->id)}}" method="post">
                          @csrf

                          <input type="hidden" name="acceptance_status" value="accepted">

                          <input type="hidden" name="completion_status" value="ongoing">
                          <button style=" margin-right: 15px; background-color: #95C623" class="btn btn-primary2" type="submit" name="button">Accept</button>
                        </form>
                        <form class="" action="{{route('rejectRequest', $record->id)}}" method="post">
                          @csrf

                          <input type="hidden" name="acceptance_status" value="rejected">


                          <button class="btn btn-primary" type="submit" name="button">Reject</button>
                        </form>
                      </div>
                      </div>
                      @endforeach
                    <?php else: ?>
                      <div class="">
                        <p>You have no pending repair. Your pending requests will appear here.</p>
                      </div>

                    <?php endif; ?>

                  </div>
              </div>
          </div>
      </div>
</div>
<script type="text/javascript">
var hasMsg = "{{Session::has('msg')}}";
var sessionMsg = "{{Session::get('msg')}}";
if (hasMsg) {
  alert(sessionMsg);
}

</script>

@endsection
