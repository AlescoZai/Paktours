@extends('layouts.companyapp')

@section('content')


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Company </a>/
        <a href="#">Tour </a>
      </li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- edit.blade.php -->

    <div class="container col-lg-6 col-sm-6 col-md-6">
      <form method="post" action="{{route('Tour.update', [$tour->id])}}">
        @csrf
        @method('PATCH')
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" value="{{ $tour->name }}" name="name">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Departure</label>
          <div class="col-md-10">
            <input type="date" class="form-control" id="lgFormGroupInput" placeholder="title" name="departure" value="{{ $tour->departure }}">
          </div>
        </div>
        <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Days</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="days" value="{{ $tour->days }}">
                    </div>
                </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Details</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Details" value="{{ $tour->Details }}">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Budget</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Budget" value="{{ $tour->Budget }}">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">No of Available Seats</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="NSA" value="{{ $tour->NSA }}">
          </div>
        </div>
        <div class="form-group row  float-right">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
  @endsection