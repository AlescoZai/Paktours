@extends('layouts.userapp')

@section('content')


    <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
        <!-- Breadcrumbs-->


        <div class="container col-lg-11 col-sm-11 col-md-11">

            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>No Of Seats</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Days</th>
                    <th><div style="width: 30px;">Details</div></th>
                    <th>Budget</th>
                    <th>Departure</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result as $post)
                    <tr>
                        <td>{{$post['uname']}}</td>
                        <td>{{$post['seats']}}</td>
                        <td>{{$post['id']}}</td>
                        <td>{{$post['name']}}</td>
                        <td>{{$post['days']}}</td>
                        <td>{{$post['Details']}}</td>
                        <td>{{$post['Budget']}}</td>
                        <td>{{$post['departure']}}</td>
                        <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>
                        <td>
                            <form action="{{action('BookController@destroy', $post['id'])}}" method="get">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit" onclick="return confirmcancel();">Cancel Booking</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection