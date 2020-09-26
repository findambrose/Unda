  @extends('layouts.homelayout')
  @section('content')
        <div class="how-it-works">
            <h1 class="how-it-works-text">How It Works</h1>
            <img style="width: 95%" src="/imgs/how-it-works.jpg" alt="">
        </div>
        <div style="background-color: #57B8FF" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style=" color: white; background-color: #E55812" class="card-header">Request a mechanic</div>

                    <div class="card-body">

                      <div class="flex-center position-ref full-height">
                          <div class="content">

                              <div class="">
                                <form class="searchform" action="/mechanic/search" method="get">
                                  @csrf
                                  <div class="form-group row">

                                      <label style="font-size: 20px; margin-left: 15px; font-weight: bold" for="location">Choose location: &nbsp;</label>
                                      <div class="col-md-5">

                                        <select class="county" name="county">
                                          <option value="select-area">Choose your area</option>
                                          <option value="nairobi">Nairobi</option>
                                          <option value="mombasa">Mombasa</option>
                                          <option value="kisumu">Kisumu</option>
                                        </select>
                                          &nbsp;&nbsp;
                                      </div>

                                      <div class="col-md-2">

                                      <select style="display: none" class="town" name="town">
                                      <option disabled value="select-area">Choose your area</option>


                                    </select>
                                      &nbsp;&nbsp;
                                      </div>
                                  </div>


                                <button  style="  border-color: #95C623; background-color: #95C623"class="btn btn-primary"  type="submit" name="button">Search</button>
                                </form>
                              </div>



                          </div>
                      </div>
                      <!-- <a href="/mechanic/profile/{$id}">View Profile</a> -->
                    </div>
                </div>
            </div>

        </div>

        <script>
        var hasMsg = "{{Session::has('thanks')}}";
        var sessionMsg = "{{Session::get('thanks')}}";
        if (hasMsg) {
          alert(sessionMsg);
        }


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



  @endsection('content')
