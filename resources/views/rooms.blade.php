<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 300vh;
                margin: 0;
            }

            .full-height {
                height: 40vh;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header{
                font-size: 35px;
                font-weight: bold;
                /* margin-top: -550px; */
                margin-left: 100px;
                /* height: 1000px; */

            }

            .subtitle{
                margin-top: -30px;
                font-size: 18px;
            }

            .flight-engine {
                /* position: absolute; */
                left: 0px;
                right: 0px;
                bottom: 50px;
                padding: 20px;
                z-index: 999;
            }
        .tab1.active {
            display: block
        }
        .tab1 {
            display: none
        }
        .tabing {
            float: left;
            width: 100%;
            background: black;
            padding: 0 10px 10px 10px;
            color: #fff;
        }
        .tabing ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
            width: 100%;
            float: left;
        }
        .tabing ul li {
            float: left;
        }
        .tabing ul li a {
            display: block;
            padding: 5px;
            text-decoration: none;
            color: #fff;
            background: rgba(0, 130, 185, .9);
            margin: 0 10px 0 0;
            padding: 5px 10px 5px 10px;
            border-radius: 0px 0px 5px 5px;
            font-size: 16px;
            text-align: left;
        }
        .tabing ul li a.active {
            background: #ba0400
        }
        .flight-tab {
            width: 110%;
            float: left;
            margin-top: 10px;
            padding: 15px
        }
        .flight-tab .textboxstyle {
            width: 100%;
            float: left;
            color: #191919;
            padding: 8px 10px 8px 35px;
            border: none;
            border-radius: 3px;
            background: #f5f5f5;
            font-size: 14px;
            line-height: 20px;
        }
        .persent-one {
            width: 25%;
            float: left;
            margin-right: 1%;
            position: relative;
            margin-bottom: 10px;
        }
        .persent-one i {
            position: absolute;
            left: 10px;
            top: 10px;
            color: #191919;
            font-size: 18px;
        }
        .persent-one.less-per {
            width: 26%;
            float: left;
            margin-right: 1%;
        }
        .persent-one.less-btn {
            width: 5%;
            float: left;
            margin-right: 1%;
        }
        .persent-one.less-btn .cst-btn {
            width: 67px;
            height: 60px;
            border-radius: 100%;
            position: absolute;
            top: -11px;
            margin-left: 6px;
        }

        .p1{
            font-size: 30px;
            margin-left: 100px;
            margin-top: 30px;
        }

        .r1{
            margin-left: 100px;
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
                <a href="{{ route('login') }}">Login</a>
            </div>
            <form action="{{url('reservation/rsv')}}" method="post" role="search">
            {{ csrf_field()}}
            <div class="flight-engine">
               <div class="container">
                  <div class="tabing">
                     <div class="tab-content">
                        <div id="1" class="tab1 active">
                           <div class="flight-tab row">

                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="from_date" class="textboxstyle" id="from-date" placeholder="From Date">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="to_date" class="textboxstyle" id="to-date" placeholder="To Date">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <input type="text" name="type" class="textboxstyle" id="type" placeholder="Type">
                              </div>
                              <div class="persent-one less-btn">
                                 <input type="Submit" name="search" value="Search" class="btn btn-info cst-btn" id="srch">
                              </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                        <!-- tab 1 -->
                     </div>
                     </div>
                     <!-- tab content -->
                  </div>
                  <!-- tabbing -->
               </div>
            </div>
             </form>
             @if(isset($details))
             @foreach($details as $list)
             <div name="list" style="width: 620px; height:80px; border: 1px solid black; margin:auto; padding: 10px;">
                <div>
                    {{ $list }}
                </div>
             </div>
            @endforeach
            @else 
                <?php echo 'empty'; ?>
            @endif
            <div class="header">
                ROOMS & SUITES
            </div>
            <div class="p1">
                Standard
            </div>
            <div>
                <div class="r1">
                    <img src="/img/rooms/1.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/2.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/4.jpg"  width="500px" height="250px">
                </div>
            </div>
            <div class="p1">
                Deluxe
            </div>
            <div>
                <div class="r1">
                    <img src="/img/rooms/d1.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/d2.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/d3.jpg"  width="500px" height="250px">
                </div>
            </div>
            <div class="p1">
                Superior Deluxe
            </div>
            <div>
                <div class="r1">
                    <img src="/img/rooms/s1.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/s2.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/s3.jpg"  width="500px" height="250px">
                </div>
            </div>
            <div class="p1">
                Premiere Deluxe
            </div>
            <div>
                <div class="r1">
                    <img src="/img/rooms/p1.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/p2.jpg"  width="500px" height="250px">
                    <img src="/img/rooms/p3.jpg"  width="500px" height="250px">
                </div>
            </div>
        </div>
    </body>
</html>
