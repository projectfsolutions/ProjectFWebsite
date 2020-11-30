@extends('layouts.fLayout')

@section('content')

<section class="sub-portfolio-sec">

    <div class="sub-portfolio-blog container">

        <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-8">

            <!-- Title -->
            <div class="">
                <h2 class="mt-4">Card Management System</h2>
            </div>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Jessa Velgado</a>
            </p>

            <hr class="portfolio-hr">

            <!-- Date/Time -->
            <p>Posted on December 15, 2019</p>

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
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/CMS.png" alt="First slide" id="slide1">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/CMS/Transact1.png" alt="Second slide" id="slide2">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/CMS/Loyalty.png" alt="Third slide" id="slide3">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/CMS/Detailed.png" alt="Fourth slide" id="slide4">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/CMS/Summ.png" alt="Fifth slide" id="slide5">
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
                <li>Card issuance for turnstile access.</li>
                <li>Limit and control turnstile access based on the day and time of event only.</li>
                <li>Monitoring of the total quantity of cards issued and inserted into the turnstile and those not yet inserted and used.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                <li>RV Laborte Devt. Corp.
                    <ul>
                        <li>Issuance of loyalty cards that can earn points for each card purchased to access turnstile.</li>
                        <li>Earned points can use to buy cards to access the turnstile.</li>
                    </ul>
                </li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                <li>Visual Studio Vb.net</li>
                <li>MySQL Database</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Device Integrated</h4>
                <li>13.56Mhz ISO 14443 A RFID Writer/Reader</li>
                <li>CRT-310 Card Capturer</li>
                <li>IO relay board</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                <li>Direct project contract of software customization to <a href="https://toyotaquezonavenue.ph/" target="_blank">RV Laborte Devt. Corp.</a> for their existing Turnstile System.</li>
            </ul>

            <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                <li>Crowd control and security of vicinity. (No access card no entry.)</li>
                <li>Easy monitoring of cards issued if the buyers used it or just keep it.</li>
                <li>Encourage your customer to always visit you because of loyalty card benefits.</li>
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
