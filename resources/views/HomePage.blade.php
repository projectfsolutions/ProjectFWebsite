@extends('layouts.fLayout')

@section('content')

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

@endsection