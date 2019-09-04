@extends('layouts.adminapp')

@section('content')


 <div class="container-fluid col-lg-11 col-sm-11 col-md-11">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>

      </li>
      <li class="breadcrumb-item active">Travels</li>
    </ol>


      
        <div >
          <center> <a href="Travel/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>CompanyName</th>
            <th>Email</th>
            <!--<th>Password</th>-->
            <th>Image</th>
              <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($travel as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['CompanyName']}}</td>
              <td>{{$post['email']}}</td>
              <!--<td>{{$post['password']}}</td>-->
              <td> <img src="/TravelAgencies/Image/{{$post['Image']}}" width="75" height="75"> </td>
              <td><a href="{{action('TravelController@edit', $post['id'])}}" class="btn btn-warning"
              onclick="return confirmedit();"  >
              Edit</a></td>
              <td>
                <form action="{{action('TravelController@destroy', $post['id'])}}" method="post">
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

@endsection
