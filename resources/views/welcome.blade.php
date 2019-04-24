<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Semantic UI -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-image: url("http://localhost/OOP/todos/project/public/img/3.jpg");
                background-position: fixed;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                color: white;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-top: 40px;
                margin-bottom: 40px;
            }

            .header{
                font-size: 18px;
            }

            .subtitle{
                font-size: 18px;
            }
            
           

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/documentation') }}">Documentation</a>
                        <a href="{{ url('/rooms') }}">Rooms</a>
                        <a href="{{ url('/reservation') }}">Reservations</a>
                        
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    <!-- <a href="welcome">Home</a>
                    <a href="documentation">Documentation</a>
                    <a href="rooms">Rooms</a>
                    <a href="reservation">Reservation</a>
                    <a href="features">Features</a>
                    <a href="{{ route('login') }}">Login</a> -->
                
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
            <div class="header">
                <p>WELCOME TO</p>
            </div>
            
                <div class="title m-b-md">
                    HOTEL MASTER
                </div>
                <div class="subtitle">
                    " TOP 25 Best Themes in the World ! "
                </div>
            </div>
        </div>
    </body>
</html>
