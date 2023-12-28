<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TurboTech motors</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>

       
    </head>
    <body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <dir class="logo">
                    <img src="{{asset('IMAGE/logo.png')}}" class="logo" alt="image here">
                </dir>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/SERVICE">SERVICE</a></li>
                    <li><a href="/APPOINTMENT">APPOINTMENT</a></li>
                    <li><a href="/CONTACT">CONTACT</a></li>
                    <li><a href="/ABOUTUS">ABOUTH US</a></li>
                </ul>
            </div>
            <div class ="search">
                <input class="srch" type="search" name="" placeholder="type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    </body>
</html>
