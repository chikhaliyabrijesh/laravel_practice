@extends('crudapp.admin.layout')
@section('titlename')
Manage All contacts
@endsection 
@section('dashboard')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Contacts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage Contacts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Contacts</h5>

            @if(Session('del'))
            <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
            </div>  
            @endif
            
              <!-- Default Table -->
              <table class="table" id="tab">
                
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Created_Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->firstname}}</td>
                    <td>{{$row->lastname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->subject}}</td>
                    <td>{{$row->message}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>
                      <a href='{{URL("/admin-login/managecontact/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete Data')"><i class="bi bi-trash3"></i></a> |

                      <a href='https://api.whatsapp.com/send?phone=+91{{ $row->mobile }}&text=Thank%20You%20For%20Contact%20With%20Us' class="btn btn-sm btn-success" onclick="return confirm('Are You Sure To Send Whatsapp')"><i class="bi bi-whatsapp"></i></a>
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
    $('#tab').DataTable();
});
</script>

@endsection
  