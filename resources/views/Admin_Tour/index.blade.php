@extends('layouts.adminapp')

@section('content')


  <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="http://localhost:8000/admin">Home </a>

      </li>
      <li class="breadcrumb-item active">Admin</li>
    </ol>


      <div class="container">

        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th><div style="width: 10px;">ID</div></th>
            <th><div style="width: 30px;">Name</div></th>
            <th><div style="width: 30px;">Days</div></th>
            <th><div style="width: 40px;">Company Id</div></th>
            <th><div style="width: 30px;">Details</div></th>
            <th><div style="width: 35px;">Budget</div></th>
            <th>Departure</th>
            <th><div style="width: 45px;">Seats Available</div></th>
            <th><div style="width: 45px;">Registered Seats</div></th>
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
              <td>{{$post['NSA']}}</div></td>
              <td>{{$post['NRP']}}</td>
              <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>
              <td>
                <form action="{{action('AdminTourController@destroy', $post['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit" onclick="return confirmdelete()">Delete
                </button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection
