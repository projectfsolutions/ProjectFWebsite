<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project F Software Solution</title>

        <!-- Bootstrap4 CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/fstyle.css">
     
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
            <a class="navbar-brand" href="#">
                <img src="img/f_icon.png" width="40" height="40" class="d-inline-block" alt="">
                Project F Software Solution
            </a>
            
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="js-scroll-trigger TopMenu" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>    
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/Slides/Slide1.jpg" alt="First slide">
                    <div class="top-layer">
                        <h1>YOUR RELIABLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, delectus.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#services" role="button">LEARN MORE</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/Slides/Slide2.jpg" alt="Second slide">
                    <div class="top-layer">
                        <h1>SOFTWARE DEVELOPMENT</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, delectus.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#services" role="button">LEARN MORE</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/Slides/Slide3.jpg" alt="Third slide">
                    <div class="top-layer">
                        <h1>PARTNER</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, delectus.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#services" role="button">LEARN MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="services-sec" id="services">
            <div class="container text-center ">
                <h1>SERVICES</h1>
                <hr>
            </div>

            <div class="container">
                <div class="row services-item">
                    <div class="col-lg-6">
                        <img class="services-img" src="img/Services/desktop-app.png" alt="Generic placeholder image" width="200" height="200"> 
                        <h2>Customized Desktop Applications Development</h2>
                        <p>We are expert in system analysis in different kinds of business exercise and develop it for the smooth work process of business with a minimum amount of effort is applied. We also integrate devices with advance technology to make the solutions more effective and efficient to use. </p>
                    </div>

                    <div class="col-lg-6">
                        <img class="services-img" src="img/Services/web-app.png" alt="Generic placeholder image" width="200" height="200">
                        <h2>Customized Web Based Applications Development</h2>
                        <p>Because of the fast development of technology, web designs are now mobile friendly. So we cannot miss this opportunity to provide it for you. From PC applications to web development that responds to any mobile device's screen size. We are pleased to expand our services not only to PC applications, but also in your mobile devices and anywhere you are.</p>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="container tech-hd">
                    <h2>Development Technologies</h2>
                </div>
                <div class="row tech-content">
                    <div class="col-lg-2">                      
                        <img class="tech-img" src="img/Services/Techs/vs.png" alt="Generic placeholder image" width="150" height="150">    
                        <div class="overlay">Visual Studio</div>        
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/vb.net.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">VB.net</div>    
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/c-sharp.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">C Sharp</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/laravel.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">Laravel</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/php.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">PHP</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/html5.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">HTML5</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/css3.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">CSS3</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/js.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">Javascript</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/jquery.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">jquery</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/vuejs.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">Vuejs</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/mysql.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">MySQL</div>
                    </div>
                    <div class="col-lg-2">
                        <img class="tech-img" src="img/Services/Techs/mssql.png" alt="Generic placeholder image" width="150" height="150">
                        <div class="overlay">MS SQL</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partners-sec text-center" id="partners">
            <div class="container">
                <div class="container partners-hd">
                    <h3>TRUSTED BY OUR PARTNERS</h3>
                </div>

                <div class="row partners-content">
                    <div class="col-lg-6">
                        <img class="tech-img partners-img" src="img/Partners/alphatech.jpg" alt="Generic placeholder image" width="150" height="150">
                    </div>

                    <div class="col-lg-6">
                        <img class="tech-img partners-img" src="img/Partners/ssi.jpg" alt="Generic placeholder image" width="150" height="150">
                    </div>
                </div>
            </div>
        </section>

        <section class="team-sec">
            <div class="container text-center">
                <div class="team-hd">
                    <h1>OUR TEAM</h1>
                    <hr>
                </div>

                <div class="row team-content">
                    <div class="col-lg-12">
                        <img class="team-img" src="img/Teams/fer.jpg" alt="Generic placeholder image" width="300" height="300">
                        <div class="team-name">Fernan Cabrera</div>
                        <div class="team-title">Lead Programmer</div>
                    </div>
                </div>
            </div>
        </section>

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

        <script src="js/style.js"></script>
    </body>
</html>
