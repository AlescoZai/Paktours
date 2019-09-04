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

        <div class="container" style="background-color:#D0D3D4">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3 style="background-color:#ECF0F1" >Add New Travel Agency</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>




            <form method="post" action="{{url('Travel')}}">
                {{csrf_field()}}

                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">CompanyName</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="CompanyName">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="email">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="password">
                    </div>
                </div>




                <div class="form-group row">
                    <label for="smFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="Image" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>

</div>

@endsection