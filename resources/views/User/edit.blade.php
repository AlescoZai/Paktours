@extends('layouts.adminapp')

@section('content')


        <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>/
        <a href="#">Travel </a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
    <!-- edit.blade.php -->

    <div class="container">
      <form method="post" action="{{route('User.update', [$user->id])}}">
        @csrf
        @method('PATCH')
        <div container-fluid col-lg-6 col-sm-8 col-md-6>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="name"
            value="{{ $user->name }}">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="email"
            value="{{ $user->email }}">
          </div>
        </div>


          <div class="form-group row">

            <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Phone Number</label>
            <div class="col-md-10">
              <input type="number" class="form-control" id="lgFormGroupInput" placeholder="title" name="phone_no"
              value="{{ $user->phone_no }}">
            </div>
          </div>


        <div class="form-group row float-right">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>
    </div>
  </div>
@endsection
