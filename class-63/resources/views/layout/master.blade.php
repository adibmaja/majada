<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Class : 62</title>
    <link rel="stylesheet" href="{{ asset('omar/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('omar/css/style.css') }}">
</head>
<body>
    <div class="container">

            <div class="row">
                <header class="col-md-12 header">
                    <h2 style="text-align: center; color: white;"> Student Management System</h2>
                </header>
            </div>

                    <div id='cssmenu' class="row">
                        <ul>
                            <li class="active"><a href='{{ route('welcome') }}'><span>Home</span></a></li>
                            <li class='has-sub'><a href='{{ route('create') }}'><span> Student Create</span></a>
                                <ul>
                                    <li class='has-sub'><a href='#'><span>Test</span></a>
                                        <ul>
                                            <li><a href='#'><span>Test 1</span></a></li>
                                            <li class='last'><a href='#'><span>Test 2</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='#'><span>About</span></a></li>
                            <li class='last'><a href='#'><span>Contact</span></a></li>
                        </ul>
                    </div>

            <div class="row">
                <div class="col-md-12">&nbsp;</div>
            </div>

            <div class="mainbody">
                @yield('content')
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
