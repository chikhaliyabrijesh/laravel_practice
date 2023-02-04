<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body 
        {
            background-color: aliceblue;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            box-sizing: border-box;
        }
        .email-send
        {
            width: 100%;
            height: auto;
            padding: 25px 5px;
            font-size: 15px;
            background-color: lightgray;

        }
    </style>
</head>
<body>
    <div class="email-send">
        <h2>Contact US Email Details</h2>
        <p>I am Just Sending Contact Us Details in Email</p>
        <p>First Name : {{ $data["firstname"] }}</p>
        <p>Last Name : {{ $data["lastname"] }}</p>
        <p>Email : {{ $data["email"] }}</p>
        <p>Mobile : {{ $data["mobile"] }}</p>
        <p>Subject : {{ $data["subject"] }}</p>
        <p>Message : {{ $data["message"] }}</p>

        <p>Contact Us OR Email Us <a href="mailto:brijeshchikhaliya1@gmail.com">brijeshchikhaliya1@gmail.com</a></p>

        <p>Our Address : Tops Technology pvt ltd<br> 1st floor above sbi bank near <br> indira circle rajkot-360005 Gujrat</p>
    </div>
</body>
</html>