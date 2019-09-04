@extends('layouts.companyapp')

@section('content')


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="#">Tour </a>
            </li>
            <li class="breadcrumb-item active">View</li>
        </ol>


      <div class="container">
        <div >
          <center> <a href="http://localhost:8000/Tour/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th><div style="width: 10px;">ID</div></th>
            <th><div style="width: 30px;">Name</div></th>
            <th><div style="width: 25px;">Days</div></th>
            <th><div style="width: 40px;">Company Id</div></th>
            <th><div style="width: 25px;">Details</div></th>
            <th><div style="width: 35px;">Budget</div></th>
            <th>Departure</th>
            <th><div style="width: 45px;">Seats Available</div></th>
            <th><div style="width: 50px;">Registered Seats</div></th>
            <th>Image</th>
            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tour as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['name']}}</td>
              <td>{{$post['days']}}</td>
              <td>{{$post['CompanyId']}}</td>
              <td>{{$post['Details']}}</td>
              <td>{{$post['Budget']}}</td>
              <td>{{$post['departure']}}</td>
              <td>{{$post['NSA']}}</td>
              <td>{{$post['NRP']}}</td>
              <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>
              <td><a href="{{action('TourController@edit', $post['id'])}}" class="btn btn-warning" onclick=" return confirmedit()">Edit</a></td>
              <td>
                <form action="{{action('TourController@destroy', $post['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit" onclick="return confirmdelete()">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endsection