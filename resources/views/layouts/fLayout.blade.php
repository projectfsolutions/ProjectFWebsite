<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project F Software Solution</title>
        <link rel="icon" href="img/f.ico" type="image/ico">

        <!-- Bootstrap4 CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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
                        <div class="Social">
                            <a href="#"><i class="fab fa-instagram-square fa-lg"></i></a>
                        </div>
                        <div class="Login">
                            <a class="nav-link badge badge-light Login" href="{{ route('AdminMain') }}">Dashboard</a>
                        </div>
                    </div>
                    @else
                    <div class="main-top justify-content-end">
                        <div class="Contact">
                            <a class="nav-link Contact" href="#">Globe:(0905)137-9350 | Smart:(0930)563-5500</a>
                        </div>
                        <div class="Social">
                            <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                        </div>
                        <div class="Social">
                            <a href="#"><i class="fab fa-instagram-square fa-lg"></i></a>
                        </div>
                        <div class="Login">
                            <a class="nav-link badge badge-light Login" href="{{ route('login') }}">Login</a>
                        </div>
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

        @yield('content')

        <footer class="text-right footer-cont">
            <div class="container">
                <div class="row">
                    <div class="footer-copyR col-lg-12">
                        Copyright &copy; 2020 Project F Software Solution
                    </div>
                    <div class="disc col-lg-12">
                        All of the trademarks, trade names, and logos appearing on this site are the property of their respective owners.
                    </div>
                </div>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/758520e91e.js" crossorigin="anonymous"></script>



        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/style.js"></script>
        <script src="js/navigation.js"></script>
    </body>
</html>
