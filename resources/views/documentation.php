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
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/> 
        <script src="{{url('assets/js/components/bootstrap.js')}}"></script>
        <!-- CSS -->
        <link href="https://localhost/OOP/todos/project/public/css/style.css" rel="stylesheet" type="text/css">
        <!-- Js -->
        <script src=" {{ asset('js/function.js') }}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                margin-bottom: 1000px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                /* justify-content: center; */
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header{
                font-size: 40px;
                font-weight: bold;
                margin-bottom: 600px;
                margin-left: 100px;
                width: 400px;
                /* border: 1px solid black; */
            }

            .subtitle{
                margin-top: -30px;
                font-size: 18px;
            }
            
            .photo{
                /* border: 1px solid black; */
                width: 1500px;
                height: 600px;
                margin: auto;
                margin-left: 100px;
                margin-top: -650px;
                margin-bottom: 50px;
            }

            .box2{
                margin-left: 580px;
                margin-top: -612px;
            }

            .box3{
                margin-left: 580px;
                margin-top: -2px;
            }

            .container1{
                /* border: 1px solid black;     */
                width: 1350px;
                height: 1000px;
                margin-top: 20px;
            }

            .box5 p{
                font-size: 21px;
                margin-top: 50px;
                margin-left: 70px;
            }

            .box5{
                /* border: 1px solid black; */
                width: 626px;
                height: 420px;
                float: right;
                margin-top: -435px;
            }

            .box6 p{
                font-size: 21px;
                margin-left: 30px;
            }

            .box6{
                /* border: 1px solid black; */
                width: 720px;
                height: 420px;
                margin-left: -10px;
                margin-top: 50px;
            }

            .box7{
                float: right;
                margin-top: -430px;
            }

            .container2{
                /* border: 1px solid black; */
                margin-top: -550px;
                margin-bottom: 300px;
                height: 800px;
            }

            .box8 img{
                margin-top: -850px;
                margin-left: 100px;
            }

            .box8{
                margin-top: -120px;
            }

            .box9 p{
                font-size: 21px;
                margin-left: 890px;
                margin-top: -460px;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="welcome">Home</a>
                <a href="documentation">Documentation</a>
                <a href="rooms">Rooms</a>
                <a href="reservation">Reservation</a>
               
                <!-- <a href="{{ route('login') }}">Login</a> -->
            </div>
            <div class="header">
                HOTEL PHOTOS
            </div>
        </div>
        <div class="photo">
            <div class="box1">
                <img src="http://localhost/OOP/todos/project/public/img/rooms/1.jpg" width="550px" height="300px">
            </div>
            <div>
                <img src="http://localhost/OOP/todos/project/public/img/rooms/2.jpg" width="550px" height="300px">
            </div>
            <div class="box2"> 
                <img src="http://localhost/OOP/todos/project/public/img/rooms/4.jpg" width="550px" height="300px">
            </div>
            <div class="box3">
                <img src="http://localhost/OOP/todos/project/public/img/rooms/5.jpg" width="550px" height="300px">
            </div>
        </div>
        <div class="header">
            Food & Drink 
            <div class="container1">
                <div class="box4">
                    <img src="http://localhost/OOP/todos/project/public/img/Restaurant/1.jpg" width="720px" height="420px">
                </div>
                <div class="box5">
                    <p>Our chic, modern, on-site restaurant features <br> exposed timber,  gleaming chrome, soft leather, <br> and exposed industrial lighting for a 
                    welcoming <br> effect.Table offers a delightful menu, celebrating <br> authentic local ingredients, fresh produce,and of <br> course, the subtle
                    sweetness of maple. Dine in a <br> social or intimate setting with lounge seating, long <br> communal tables and alfresco outdoor dining to <br> your every need. </p>
                </div>
                <div class="box6">
                   <p> Monday-Friday: <br>
                    Breakfast: 6:30 AM-10:30 AM <br>
                    Lunch: 11:30 AM-1:30 PM <br>
                    Dinner: 4:30 PM-10 PM <br>
                    <br>
                    Saturday & Sunday:  <br>
                    Brunch: 7 AM-1 PM  <br>
                    Dinner: 5 PM-10 PM <br>
                    </p>
                </div>
                <div class="box7">
                    <img src="http://localhost/OOP/todos/project/public/img/Restaurant/2.jpg" width="720px" height="420px">
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="header">
                Room Service
            </div>
            <div class="box8">
                <img src="http://localhost/OOP/todos/project/public/img/rooms/6.jpg" width="750px" height="450px">
            </div>
            <div class="box9">
                <p>
                    ROOM SERVICE <br>
                    Guests who wish to enjoy a meal in the comfort of their room can take <br> advantage  of 
                    our tempting in-room dining menu.
                </p>
            </div>
        </div>
    </body>
</html>
                