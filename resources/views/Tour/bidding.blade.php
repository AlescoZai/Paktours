@extends('layouts.companyapp')

@section('content')

  @if(Session::has('flash_message'))
    <div class="alert alert-success">
      <strong style="text-align: center"> {!! session('flash_message') !!}</strong>
    </div>
  @endif
    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="#">Bidding </a>
            </li>
            <li class="breadcrumb-item active">View</li>
        </ol>


      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="package-top-bar mb-60 separator clearfix">
                <div class="package-search f-left">
                  <form method="POST" action="/search">
                    {{csrf_field()}}
                    <input  type="text" class="form-control" name="name" placeholder="Search">
                    <button><i class="fas fa-search"></i></button>
                  </form>
                </div>
                <div class="package-search-result f-right">
                  <p>Showing 1- 5 of 20 results</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            @foreach($data as $value)
              <div class="col-lg-6 col-md-8" >
                <div class="single-package mb-50">
                  <div class="package-img">
                    <img src="\Tours\Image\{{$value->Image}}" width="200" height="200" alt="package image">
                  </div>

                  <h5><span>{{$value->name}}</span></h5>


                  <h4><span>Bidding</span></h4>
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th> <div style="width: 30px;">Company Name</div></th>
                      <th>Budget</th>
                      <th> <div style="width: 80px;">Total Number Of Seats</div></th>
                      <th>Details</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($data1 as $value1)
                      @if($value->id==$value1->tt_id)
                        <tr>
                          <td>{{$value1->CompanyName}}</td>
                          <td>{{$value1->Budget}}</td>
                          <td>{{$value1->NSA}}</td>
                          <td> <div style="width: 120px;">{{$value1->Details}}</div></td>
                        </tr>
                      @endif

                    @endforeach
                    </tbody>
                  </table>
                  <br><br><br><br>

                  <a data-modal="modal{{$value->id}}" class="bt">READ MORE <i class="icofont icofont-arrow-right"></i></a>
                </div>
              </div> <!-- End Single Package -->

              <!--popup-->
              <!-- The Modal -->
              <div id="modal{{$value->id}}" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <div class="modal-header" style="text-align: center;">
                    <div  class='col-12 modal-title text-center'>
                      <h2 >{{$value->name}}</h2>
                    </div>
                    <span style="align-items: right" class="close">&times;</span>
                  </div>
                  <div class="modal-body" style="text-align: center";>
                    <p><img src="\Tours\Image\{{$value->Image}}" width="250" height="250" alt=""></p>
                    <p><b>Days: </b>{{$value->days}}</p>
                    <p><b>Departure date: </b>{{$value->departure}}</p>

                    <p><b style="font-size: larger">Details:</b></br>
                      {{$value->Details}}</p>
                    <p><div class="float-left">Total Seats = Null  </div>
                    <div class="float-right">Booked Seats = {{$value->NRP}} </div></p>
                  </div>
                  <div  class="modal-footer">


                    <form method="post" action="/bid/{{ $value->id }}">
                      {{csrf_field()}}
                      <div class="form-group row">

                        <label>Seats</label>
                        <div class="col-md-10">
                          <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="0" name="NSA">
                        </div>
                      </div>
                      <div class="form-group row">

                        <label>Budget </label>
                        <div class="col-md-10">
                          <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="0" name="Budget">
                        </div>
                      </div>
                      <div class="form-group row">

                        <label>Details </label>
                        <div class="col-md-10">
                          <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Enter Details Here" name="details">
                        </div>
                      </div>
                      <button class="btn btn-secondary">Bid Now</button>

                    </form>


                  </div>
                </div>

              </div>
              <!--End Of PopUp-->
            @endforeach
          </div>
          {{ $data->links() }}

        </div>
      </div>
    </div>
    @endsection
    <script>
            $(document).ready(function(){
              $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() > 4) { // check if user scrolled more than 50 from top of the browser window
                  $(".main-menu").css("visibility", "hidden"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else {
                  $(".main-menu").css("visibility", "visible"); // if not, change it back to transparent
                }
              });
            });
        </script>
