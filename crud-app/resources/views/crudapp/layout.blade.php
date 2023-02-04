<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('crudapp/assets/css/style.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('crudapp/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{asset('crudapp/assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-md p-3 mt-0">
    <a href="#" class="navbar-brand">CRUDAPP</a>
    <ul class="navbar-link">
        <li><a href="/"><i class="bi bi-house"></i>Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Gallay</a></li>
        <li><a href="/contactus">Contact</a></li>
        <li><a href="">Feedback</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-check-fill"></i> Account</a>
            <ul class="dropdown-menu" style="background-color: gray;">
                <li><a href="/register">Create Account</a></li> 
                <li><a href="#">Sign In</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- //navbar -->

<!-- content -->

@yield("content")

<!-- //content -->

<!-- footer -->

<div class="container-fluid footer text-white p-5 h-50">
    <p class="text-center p-5">Copyright@2023 Crud-App all right reserved</p>
</div>

<!-- //footer -->
</body>
</html>