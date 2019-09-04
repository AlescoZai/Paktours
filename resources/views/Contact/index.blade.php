@extends('layouts.adminapp')

@section('content')


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="Contact">Messages </a>
            </li>
            <li class="breadcrumb-item active">View</li>
        </ol>


      <div class="container">

        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th><div style="width: 10px;">ID</div></th>
            <th><div style="width: 30px;">User Name</div></th>
            <th><div style="width: 30px;">First Name</div></th>
            <th><div style="width: 25px;">Last Name</div></th>
            <th><div style="width: 40px;">Email</div></th>
            <th><div style="width: 25px;">Phone</div></th>
            <th><div style="width: 35px;">Subject</div></th>

            <th><div style="width: 45px;">Message</div></th>

            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($contact as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['uname']}}</td>
              <td>{{$post['name']}}</td>
              <td>{{$post['last_name']}}</td>
              <td>{{$post['email']}}</td>
              <td>{{$post['phone']}}</td>
              <td>{{$post['subject']}}</td>
              <td>{{$post['message']}}</td>


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