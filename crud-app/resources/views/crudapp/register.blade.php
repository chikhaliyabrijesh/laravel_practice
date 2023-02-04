@extends('crudapp.layout')

@section('title here')
Register page
@endsection

@section('content')
<div class="container mt-4 content">
      <h1 class="text-center">Create Account Here<i class="bi bi-person-fill"></i></h1>
      <hr style="border-color: black; width: 50%; height: 5px; margin: auto;">

      <div class="row">
          <div class="col-md-6 mx-auto">
              <div class="card mt-4">
                  <div class="card-header"></div>
                  <div class="card-body">

                <div class="form-group mt-3">
                    <!-- flash data message -->

                    @if(Session("success"))
                    <div class="alert alert-success">
                        <span class="text-dark"><strong>Hey!</strong>{{ Session('success') }}</span>
                    </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>    


                  <form method="post" id="frm">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="text" name="name" placeholder="Name *" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="mobile" placeholder="Mobile *" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="email" placeholder="Email *"  class="form-control" >
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="password" name="pass" placeholder="Password *" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-6 mt-3">
                            <input type="password" name="cpass" placeholder="Confirm-Password *" class="form-control">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea name="address" placeholder="Address *" class="form-control"></textarea> 
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="submit" name="register" value="Create Account"  required style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
                        </div>

                        <div class="form-group col-md-6 mt-3">
                            <input type="reset" name="reset" value="Reset"  required style="width: 100%; height: auto; margin: auto; padding: 10px; background-color: red; border-radius: 4px; border: none; color:white">
                        </div>
                    </div>
                    </form>   
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection


