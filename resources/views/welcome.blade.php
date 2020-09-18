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

                                        <select class="county" name="location">
                                          <option value="select-area">Choose your County</option>
                                          <option value="nairobi">Nairobi</option>
                                          <option value="mombasa">Mombasa</option>
                                          <option value="kisumu">Kisumu</option>
                                         
                                        </select>
                                          &nbsp;&nbsp;
                                  </div>

                                  <div class="col-md-2">

                                    <select style="display: none" class="town" name="location">
                                      <option disabled value="select-area">Choose your area</option>
                                      <option value="tobe populated">tobe populated</option>
                                      
                                    </select>
                                      &nbsp;&nbsp;
                              </div>
                                  </div>


                                <button  style="  border-color: #95C623; background-color: #95C623"class="btn btn-primary"  type="submit" name="button">Search</button>
                                   
                              </form>
                              </div>

                              <div class="success-message">
                                  <p>{{session('thanks')}}</p>

                              </div>

                          </div>
                      </div>
                      <!-- <a href="/mechanic/profile/{$id}">View Profile</a> -->
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
            }); 
              if (selectedCounty == "nairobi") {
                //Populate towns with nairobi list
                //Loop over nairobi list
                for (var town of nairobi) {
                   $(".town").html(
                     "<option> $town </option>"
                   );
                }

              }
              if (selectedCounty == "kisumu") {
                //Populate towns with nairobi list
                
              }
              if (selectedCounty == "mombasa") {
                //Populate towns with nairobi list
                
              }


          });
        </script>

  @endsection('content')
