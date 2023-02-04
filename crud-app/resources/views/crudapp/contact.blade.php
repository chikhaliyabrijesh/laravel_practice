@extends('crudapp.layout')
@section('title_here')
Contact Us page
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 p-5">
            <h3 class="mt-3" align="center">Our Address</h3>
            <hr style="width: 100%; background-color:black; height: 5px;">

            <p><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp; 104 Tagore apartment B   1st floor,<br>
            opp Arihant Nr Tata motors showroom,<br>
            Virani chowk, Tagor road, Rajkot (Gujarat)- 360002.
            </p>

            <p><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;(+91) 72288 44111 , (+91) 91042 36679 , <br>(+91) 70465 95620
            </p>

            <p></p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@crudapp.com">info@crudapp.com</a></p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.7887438818516!2d70.79046271426832!3d22.285990949047424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb6f0456fea9%3A0x65d89544902ce948!2sEverbest%20Job%20Placement!5e0!3m2!1sen!2sin!4v1662270385406!5m2!1sen!2sin" width="290" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-md-8 p-5">
            <h3 class="mt-3" align="center">Contact With Us</h3>
            <hr style="width: 100%; background-color:black; height: 5px;">

            <div class="form-group mt-2">
                <!-- success flash data message -->
                @if(Session("success"))
                    <div class="alert alert-success">
                        <span class="text-dark"><strong>Hey!</strong>{{ Session('success') }}</span>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

                
            <form method="post">

                @csrf
                <div class="form-group mt-2">
                    <label>First Name : </label>
                    <input type="text" name="fname" placeholder="First Name *" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label>Last Name : </label>
                    <input type="text" name="lname" placeholder="Last Name *" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label>Email : </label>
                    <input type="text" name="email" placeholder="Email *" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label>Mobile : </label>
                    <input type="text" name="phone" placeholder="Mobile No. *" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label>Subject : </label>
                    <input type="text" name="subject" placeholder="Subject *" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label>Message : </label>
                    <textarea name="message" placeholder="Message *" class="form-control"></textarea>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 mt-3">
                        <input type="submit" name="sub" value="Submit"style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
                    </div>

                    <div class="form-group col-md-6 mt-3">
                        <input type="reset" name="reset" value="Reset" style="width: 100%; height: auto; margin: auto; padding: 10px; background-color: red; border-radius: 4px; border: none; color:white">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection