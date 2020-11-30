@extends('layouts.fLayout')

@section('content')

<section class="sub-portfolio-sec">

    <div class="sub-portfolio-blog container">

        <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-8">

            <!-- Title -->
            <div class="">
                <h2 class="mt-4">One Morayta Residence Management System</h2>
            </div>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Jessa Velgado</a>
            </p>

            <hr class="portfolio-hr">

            <!-- Date/Time -->
            <p>Posted on May 16, 2019</p>

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
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>

                <div class="sub-porfolio-carousel carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS.png" alt="First slide" id="slide1">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS/Stat.png" alt="Second slide" id="slide2">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS/Tenant.png" alt="Third slide" id="slide3">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS/Contract.png" alt="Fourth slide" id="slide4">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS/Misce.png" alt="Fifth slide" id="slide5">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RMS/Billing.png" alt="Sixth slide" id="slide6">
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

            <!-- Post Content -->
            {{-- <p class="lead">Earn revenue with fully automated parking.</p> --}}

            <ul class="sub-portfolio-ul"><h4>System Main Features</h4>
                <li>Monitoring of rooms and beds timeline.</li>
                <li>Contract management and procedures.</li>
                <li>Billings management.</li>
                <li>Early reminders for the contracts and reservations near to expire.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                <li>Software design and color.</li>
                <li>Distribution of utilities billing to each bed occupant in the room.</li>
                <li>Generated reports for billing.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                <li>C Sharp</li>
                <li>Visual Studio</li>
                <li>MySQL Database</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                <li>Direct project contract of Software Customization to <a href="http://oneuniversityresidences.com/" target="_blank">One Morayta Residences</a> for their residence management and monitoring.</li>
            </ul>

            <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                <li>Easy monitoring of each contract timeline and vacancies.</li>
                <li>Easy organizing and tracking of data of each resident.</li>
                <li>Automatic calculation and contribution of utility billings.</li>
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
                            <a href="#">Parking System</a>
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
