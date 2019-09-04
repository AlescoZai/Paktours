@extends('layouts.adminapp')

@section('content')


        <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>

      </li>
      <li class="breadcrumb-item active">User</li>
    </ol>


      <div class="container">
        <div >
          <center> <a href="User/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
              <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($user as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['name']}}</td>
              <td>{{$post['email']}}</td>
              <td>{{$post['phone_no']}}</td>
              <td><a href="{{action('UserController@edit', $post['id'])}}" class="btn btn-warning" 
                onclick="return confirmedit();">
              Edit</a></td>
              <td>
                <form action="{{action('UserController@destroy', $post['id'])}}" method="post">
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