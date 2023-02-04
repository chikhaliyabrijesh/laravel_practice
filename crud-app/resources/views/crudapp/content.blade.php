@extends('crudapp.layout')
@section('title_here')
Home page
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mt-3">CRUD-APP</h3>
            <hr style="border-color: black; width: 20%; height: 5px; margin: auto; margin-top:5px; ">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mt-4">
            <a href=""><button class="btn btn-lg bg-danger text-white w-50">Reset</button></a>
        </div>

        <div class="col-md-4 mt-4">
            <input type="text" name="search" placeholder="search here *" required class="form-control">      
        </div>

        <div class="col-md-4 mt-4">
            <a href=""><button class="btn btn-lg bg-primary text-white w-50 float-end">Add User</button></a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <table class="table table-borderless table-hover bg-white mt-2">
        <tr class="bg-dark">
            <th class="text-white">ID</th>
            <th class="text-white">PHOTO</th>
            <th class="text-white">NAME</th>
            <th class="text-white">GENDER</th>
            <th class="text-white">ADDRESS</th>
            <th class="text-white">PHONE</th>
            <th class="text-white">EMAIL</th>
            <th class="text-white">ACTION</th>
        </tr>

        <tr>
            <td>101</td>
            <td><img src="{{asset('crudapp/assets/images/men.webp')}}" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
            <td>Parth Patel</td>
            <td>Male</td>
            <td>Rajkot</td>
            <td>(+91)9998999090</td>
            <td>parthpatel@gmail.com</td>
            <td>
                <a href=""><button type="button" class="btn btn-sm btn-primary text-white"><i class="bi bi-eye">&nbsp;Read</i></button></a> 

                <a href=""><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 

                <a href=""><button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
            </td>    
        </tr>
    </table>
</div>

@endsection