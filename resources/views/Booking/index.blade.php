@extends('layouts.companyapp')

@section('content')
  <div class="container-fluid col-lg-10 col-sm-10 col-md-10">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Company </a>

      </li>
      <li class="breadcrumb-item active">Bookings</li>
    </ol>


      <div class="container">

        <table class="table table-striped">
          <thead>
          <tr>
            <th>User Name</th>
            <th>Phone Number</th>
            <th>ID</th>
            <th>Name</th>
            <th>Days</th>
            <th>Details</th>
            <th>Budget</th>
            <th>Departure</th>
            <th>Image</th>
          </tr>
          </thead>
          <tbody>
          @foreach($result as $post)
            <tr>
              <td>{{$post['uname']}}</td>
              <td>{{$post['phone_no']}}</td>
              <td>{{$post['id']}}</td>
              <td>{{$post['name']}}</td>
              <td>{{$post['days']}}</td>
              <td>{{$post['Details']}}</td>
              <td>{{$post['Budget']}}</td>
              <td>{{$post['departure']}}</td>
              <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>

            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
  </div>




@endsection