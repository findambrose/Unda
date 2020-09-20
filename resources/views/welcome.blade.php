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
                                    <div class="col-md-10">
                                  <script type="text/javascript">


                                    function configureDropDownLists(county,city) {
                                            var Nairobi = new Array('', 'Madaraka', 'South-b');
                                            var Mombasa = new Array('', 'Mtwapa', 'Bamburi');
                                    
                                        switch (county.value) {
                                                     case 'Nairobi':
                                                           document.getElementById(city).options.length = 0;
                                                           for (i = 0; i < Nairobi.length; i++) {
                                                           createOption(document.getElementById(city), Nairobi[i], Nairobi[i]);
                                                    }
                                                    break;
                                                case 'Mombasa':
                                                    document.getElementById(city).options.length = 0; 
                                                for (i = 0; i < Mombasa.length; i++) {
                                                    createOption(document.getElementById(city), Mombasa[i], Mombasa[i]);
                                                    }
                                                    break;
                                          }
                                    
                                        }
                                    
                                     function createOption(county, text, value) {
                                            var opt = document.createElement('option');
                                            opt.value = value;
                                            opt.text = text;
                                            county.options.add(opt);
                                        }
                                    </script>
                                    <tr>
                                    <td>County Name: </td>
                                    <td><select id="county" onchange="configureDropDownLists(this,'city');">
                                    <option value=""></option>
                                    <option value="Nairobi">Nairobi</option>
                                    <option value="Mombasa">Mombasa</option>
                                    </select></td>
                                    </tr><br>
                                    <tr>
                                    <td>City: </td>
                                    <td><select id="city">
                                    </select></td>
                                    </tr>
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
                                  

  @endsection('content')
