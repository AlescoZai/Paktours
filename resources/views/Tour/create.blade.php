@extends('layouts.companyapp')

@section('content')


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="#">Tour </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container col-lg-6 col-sm-6 col-md-6">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3>Add New Tour</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>


            <form method="post" action="{{url('Tour')}}">
                {{csrf_field()}}
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Departure</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="lgFormGroupInput" placeholder="title" name="departure">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Days</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="days">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Details</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Details">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Budget</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Budget">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">No of Available Seats</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="NSA">
                    </div>
                </div>
				
				
                <div class="form-group row">
                    <label for="smFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="Image" accept="image/*">
                    </div>
                </div>
                <div class="form-group row  float-right">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>
    </div>
    @endsection