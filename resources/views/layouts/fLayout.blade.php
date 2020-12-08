<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Software Development Provider,Software Development Provider Philippines,Software Integration,Software Integration Philippines,Software Solutions,Software Solutions Philippines,Website Development,Website Development Philippines,Website Design,Website Design Philippines,Customized Software,Customized Software Philippines,Customized Software Development,Software Development Philippines,Web-based Development,Web-based Development Philippines,System Automation,System Automation Philippines,Software Automation,Software Automation Philippines,Software Robotics Development,Software Robotics Development Philippines">
        <meta name="description" content="Project F Software Solution provides software development services for Desktop Application and Web-based Application. We also do the Software and Device integration to bring you the ideal System Automation.">

        @section('meta_tags')

        @show

        <title>Project F Software Solution</title>
        <link rel="icon" href="img/f.ico" type="image/ico">

        <!-- Bootstrap4 CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/fstyle.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <div class="main-top justify-content-end">
                        <div class="Contact">
                            <a class="nav-link Contact" href="#">Globe:(0905)137-9350 | Smart:(0930)563-5500</a>
                        </div>
                        <div class="Social">
                            <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                        </div>
                        {{-- <div class="Login">
                            <a class="nav-link badge badge-light Login" href="{{ route('AdminMain') }}">Dashboard</a>
                        </div> --}}
                    </div>
                    @else
                    <div class="main-top justify-content-end">
                        <div class="Contact">
                            <a class="nav-link Contact" href="#">Globe:(0905)137-9350 | Smart:(0930)563-5500</a>
                        </div>
                        <div class="Social">
                            <a href="https://web.facebook.com/ProjectFSoftwareSolutions" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>
                        </div>

                        @if (\Request::is('Admin'))
                            <div class="Login">
                                <a class="nav-link badge badge-light Login" href="{{ route('login') }}">Login</a>
                            </div>
                        @endif
                    </div>
                    @endauth
                </div>
            @endif
        </div>


        <nav class="navbar navbar-expand-lg navbar-light bg-nav" id="m-navar">
            <a class="navbar-brand" href="/HomePage">
                <img src="img/f_icon.png" width="40" height="40" class="d-inline-block" alt="">
                Project F Software Solution
            </a>

            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#" id="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#" id="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#" id="clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#" id="contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="load" id="loader">
            <div class="cover"></div>
            <img src="img/f_icon.png" alt="" id="fLogo">
        </div>

        <div class="web-content-layout">
            @yield('content')
        </div>

        {{-- {{json_encode(Route::current()->uri)}} --}}
        <footer class="text-right footer-cont">
            <div class="container">
                <div class="row">
                    <div class="footer-copyR col-lg-12">
                        Copyright &copy; 2020 Project F Software Solution
                    </div>
                    <div class="footer-disc col-lg-12">
                        All of the trademarks, trade names, and logos appearing on this site are the property of their respective owners.
                    </div>
                </div>
            </div>
        </footer>

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              xfbml            : true,
              version          : 'v9.0'
            });
          };

          (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="1691265414503178">
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/758520e91e.js" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/style.js"></script>
        <script src="js/navigation.js"></script>
    </body>
</html>
