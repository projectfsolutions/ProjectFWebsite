@extends('layouts.fLayout')

@section('meta_tags')
    @parent
    <meta property="og:title" content="One Morayta Turnstile Access Control System">
    <meta property="og:url" content="http://projectfsoftwaresolutions.net/OneTACS">
    <meta property="og:image" content="http://projectfsoftwaresolutions.net/img/Portfolio/OneTurnstile.jpg">
    <meta property="og:description" content="Monitoring and control for the student residents who pass through the turnstile.">
@stop

@section('content')

<section class="sub-portfolio-sec">
    <div class="sub-portfolio-blog container">
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <div class="">
                    <h2 class="mt-4">One Morayta Turnstile Access Control System</h2>
                </div>

                <!-- Author -->
                <p class="lead">
                by
                <a href="#">Jessa Velgado</a>
                </p>

                <hr class="portfolio-hr">

                <!-- Date/Time -->
                <p>Posted on March 3, 2019</p>

                <hr class="portfolio-hr">

                <!-- Preview Image -->
                {{-- <img class="img-fluid rounded" src="img/Portfolio/OneTurnstile.jpg" alt=""> --}}

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>

                    <div class="sub-porfolio-carousel carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/OneTurnstile.jpg" alt="First slide" id="slide1">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/OneTACS/AntiPassback.jpg" alt="Second slide" id="slide1">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/OneTACS/Registration.jpg" alt="Third slide" id="slide1">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/OneTACS/Logs.jpg" alt="Fourth slide" id="slide1">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/OneTACS/Voice.jpg" alt="Fifth slide" id="slide1">
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
                <hr class="portfolio-hr">

                <ul class="sub-portfolio-ul"><h4>System Main Features</h4>
                    <li>Real-time access monitoring.</li>
                    <li>Anti-passback security.</li>
                    <li>Keycard registration with expiration.</li>
                    <li>Keycard access blocking.</li>
                    <li>Time in and time out logs report.</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                    <li>Software design and color.</li>
                    <li>Restrict some student residents to access turnstile to come out with the specific time and day of the week because of the curfew.</li>
                    <li>Voice prompt for every unsuccessful access to the turnstile because of failing to provide the necessary requirements to open it.</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                    <li>Visual Studio Vb.net</li>
                    <li>MySQL Database</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Device Integrated</h4>
                    <li>Zk Access Control Reader</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                    <li>Direct project contract of Software Customization to <a href="http://oneuniversityresidences.com/" target="_blank">One Morayta Residences</a> for their existing turnstile.</li>
                </ul>

                <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                    <li>Student residents security mostly during curfew hours.</li>
                    <li>Avoidance of improper use of keycards by borrowing or to be borrowed by others to access the turnstile even they are not using their own keycards.</li>
                    <li>Awareness of the guards on duty to do action quickly to the improper used of the turnstiles because of the voice prompt indicator that will speak if the student resident is failed to provide the requirements of the system to open the turnstile.</li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Other Projects</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/VMS">Visitor Management System</a>
                                    </li>
                                    <li>
                                        <a href="/RAMS">Grass Residence Access Monitoring System</a>
                                    </li>
                                    <li>
                                        <a href="/CMS">Card Management System</a>
                                    </li>
                                    <li>
                                        <a href="/ParkingPOS">Car Park Point-Of-Sale System</a>
                                    </li>
                                    <li>
                                        <a href="/ToyotaSurvey">Toyota Quezon Avenue Survey System with CMS</a>
                                    </li>
                                    <li>
                                        <a href="/RMS">One Morayta Residence Management System</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
            </div>
        </div>
        <!-- /.row -->

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- The Close Button -->
                <span class="close" id="xModal">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>
        </div>

</section>

@endsection
