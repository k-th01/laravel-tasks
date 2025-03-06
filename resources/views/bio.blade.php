<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{asset('Github.ico')}}">

    <title>About me</title>
</head>
<body>

    <!-- Tutorial #13 Components -->
    <x-message-notification msg="user added successfully." class="success" />
    
    <div class="header">
        <h2 style="font-family: 'Apercu', sans-serif; width: 500px; text-align: center;">Tutorial #11 Blade Template</h2>
    </div>

    <!--  -->
    <div class="container" style="color: #101D42; text-align: justify; width: 400px; padding: 20px; border-radius: 15px;">
        <h1>Hi my name is <span style="color: #0E34A0;">{{$name}}.</h1>
        <h1>I live in the <span style="color: #C94277;">{{$ph}}.</h1>
        <h1>I am <span style="color: #02C3BD;">{{$age}}</span> years old and I want to be a <a href="https://tinyurl.com/2w7huy8m" style="text-decoration: none; color:#101D42;"><u>Web Developer</u></a>.</h1>
        <h1 style="text-align: right; color: #FF4E46;">✓ {{$web}} {{$yr}}</h1>
    </div>

</body>
</html>

    <style>

        body {
            font-family: 'Apercu', sans-serif;
            background-color: #c0cfff;
        }

        .container {
            position: absolute; 
            border: 2px solid black;
            left: 50px;
        }

        .success{
            background-color: lightgreen;
            color: green;
            padding: 3px 10px;
            margin:  10px;
            display: inline-block;
            border-radius: 5px;
        }
    </style>