<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Work</title>
    <link rel="stylesheet" href="{{ asset('omar/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('omar/css/style.css') }}">
</head>
<body>
    <div class="container">

            <div class="row">
                <header class="col-md-12 header">
                    <h2 style="text-align: center; color: white;"> Bangladesh Computer Council</h2>
                </header>
            </div>

                    <div id='cssmenu' class="row">
                        <ul>
                            <li class="active"><a href=' '><span>Dashboard</span></a></li>
                            <li class='has-sub'><a href=''><span> </span></a>
                                <ul>
                                    <li class='has-sub'><a href='#'><span> </span></a>
                                        <ul>
                                            <li><a href='#'><span>  1</span></a></li>
                                            <li class='last'><a href='#'><span> </span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='#'><span> </span></a></li>
                            <li class='last'style="float: right;";><a href='#'><span>Admin </span></a></li>
                        </ul>
                    </div>

            <div class="row">
                <div class="col-md-12">&nbsp;</div>
            </div>
             
            <div class="" style="">
               
                <div class="mainbody">
                @yield('content')
                </div>
            </div>


            <div class="row">
               <footer class="footer">
                   <div style="color: white; padding-top: 15px" class="col-md-6"> Developed by : BCC </div>
                   <div style="color: white; padding-top: 15px" class="col-md-6 text-right"> Copyright @ BCC </div>
               </footer>
            </div>

    </div>
    <script src="{{ asset('omar/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('omar/js/bootstrap.min.js') }}"></script>
</body>
</html>


{{--Author : Omar Faruq--}}
{{--Mobile : 01611775477--}}
{{--Email : oneskybd9@gmail.com--}}
{{--Website : oneskybd.com--}}
