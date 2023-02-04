@extends('crudapp.admin.layout')

@section('title_name')
Manage All Customers
@endsection

@section('dashboard')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Customers</h5>

              <!-- flash message -->
            @if(Session('del'))
            <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
            </div>  
            @endif
            
              <!-- Default Table -->
              <table class="table" id="tab1">
                
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">address</th>
                    <th scope="col">created_date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>
                      <a href='{{URL("/admin-login/managecustomers/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete Data')"><i class="bi bi-trash3"></i></a> |

                      <a href='https://api.whatsapp.com/send?phone=+91{{ $row->mobile }}&text=Thank%20You%20For%20Create%20Account%20With%20Us' class="btn btn-sm btn-success" onclick="return confirm('Are You Sure To Send Whatsapp')"><i class="bi bi-whatsapp"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<script>
  $(document).ready(function () {
    $('#tab1').DataTable();
});
</script>

@endsection