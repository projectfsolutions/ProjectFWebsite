@extends('layouts.fLayout')

@section('content')

<section class="sub-portfolio-sec">

    <div class="sub-portfolio-blog container">

        <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-8">

            <!-- Title -->
            <div class="">
                <h2 class="mt-4">Toyota Quezon Avenue Survey System with CMS</h2>
            </div>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Jessa Velgado</a>
            </p>

            <hr class="portfolio-hr">

            <!-- Date/Time -->
            <p>Posted on July 5, 2019</p>

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
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/Survey.png" alt="First slide" id="slide1">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ToyotaSS/CMSquestion.png" alt="Second slide" id="slide2">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ToyotaSS/Detailed.png" alt="Third slide" id="slide3">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ToyotaSS/Graph1.png" alt="Fourth slide" id="slide4">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ToyotaSS/Graph2.png" alt="Fifth slide" id="slide5">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ToyotaSS/Graph3.png" alt="Sixth slide" id="slide6">
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
                <li>Responsive web design.</li>
                <li>Survey questions content management.</li>
                <li>Recording of survey responses including some the personal information of the participant.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                <li>Software design and color.</li>
                <li>Generated reports.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                <li>PHP Framework Laravel</li>
                <li>CSS</li>
                <li>Javascript</li>
                <li>jQuery</li>
                <li>MySQL Database</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                <li>Direct project contract of software customization to <a href="https://toyotaquezonavenue.ph/" target="_blank">Toyota Quezon Avenue</a> for their Survey System.</li>
            </ul>

            <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                <li>Quick and real-time results for every participants who completed the questionnaire.</li>
                <li>Easy analysis of survey responses by the use of the generated reports which will show you the possible issues or concerns that need to be addressed quickly.</li>
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
                                <a href="/RMS">One Morayta Residence Management System</a>
                            </li>
                            <li>
                                <a href="/OneTACS">One Morayta Turnstile Access Control System</a>
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
