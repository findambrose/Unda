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

                                        <select class="" name="location">
                                          <option value="select-area">Choose your area</option>
                                          <option value="nairobi">Nairobi</option>
                                          <option value="mombasa">Mombasa</option>
                                          <option value="kisumu">Kisumu</option>
                                          <option value="nakuru">Nakuru</option>
                                          <option value="eldoret">Eldoret</option>
                                          <option value="kitui">Kitui</option>
                                          <option value="malindi">Malindi</option>
                                          <option value="kisii">Kisii</option>
                                          <option value="embu">Embu</option>
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


  @endsection('content')
