@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create an account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right" for="location">Location</label>
                            <div class="col-md-3">

                              <select class="county" name="county">
                                <option value="select-area">Choose your area</option>
                                <option value="nairobi">Nairobi</option>
                                <option value="mombasa">Mombasa</option>
                                <option value="kisumu">Kisumu</option>
                              </select>

                            </div>

                            <div class="col-md-2">

                            <select style="display: none" class="town" name="town">
                            <option disabled value="select-area">Choose your area</option>


                          </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Choose Role') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('role') is-invalid @enderror" name="role">
                                  <option value="vehicle_owner">Vehicle Owner</option>
                                  <option value="mechanic">Mechanic</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                              <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" value="{{old('dob')}}" required>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                              <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                <p>Already a member? <a href="{{url('/login')}}">Login</a> </p> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


 $(function () {
   //jQuery code
   var nairobi = ["Madaraka", "Nairobi West", "Kibera", "Westlands"];
   var kisumu = ["Bondo", "Nyakach", "Nyando", "Kisumu West"];
   var mombasa = ["Nyali", "Ukunda", "Bamburi", "Mtwapa"];

   $(".county").on("change", function () {
     var selectedCounty = $(".county").val();

     $(".town").css({"display": "block"});

     switch (selectedCounty) {
       case "nairobi":
        $(".town").empty();
        $('.town').append(`<option value="">Choose your area</option>`);
         for (var town of nairobi) {

           $('.town').append(`<option value="${town.toLowerCase
           ().replace(/\s/g, '')}">${town}</option>`);
         }

         break;
       case "kisumu":
         $(".town").empty();
         $('.town').append(`<option value="">Choose your area</option>`);
         for (var town of kisumu) {

           $('.town').append(`<option value="${town.toLowerCase
           ()}">
                                 ${town}
                            </option>`);
         }
         break;
       case "mombasa":
           $(".town").empty();
           $('.town').append(`<option value="">Choose your area</option>`);
         for (var town of mombasa) {
           $('.town').append(`<option value="${town.toLowerCase
           ()}">
                                 ${town}
                            </option>`);
         }

         break;
       default:

     }

 }
 );

 });
</script>
@endsection
