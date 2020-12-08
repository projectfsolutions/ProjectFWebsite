@extends('layouts.fLayout')

@section('meta_tags')
    @parent
    <meta property="og:title" content="Car Park Point-Of-Sale System">
    <meta property="og:url" content="http://projectfsoftwaresolutions.net/ParkingPOS">
    <meta property="og:image" content="http://projectfsoftwaresolutions.net/img/Portfolio/ParkingPOS.png">
    <meta property="og:description" content="Revenue with fully automated parking.">
@stop

@section('content')

<section class="sub-portfolio-sec">

    <div class="sub-portfolio-blog container">

        <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-8">

            <!-- Title -->
            <div class="">
                <h2 class="mt-4">Car Park Point-Of-Sale System</h2>
            </div>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Jessa Velgado</a>
            </p>

            <hr class="portfolio-hr">

            <!-- Date/Time -->
            <p>Posted on September 3, 2019</p>

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
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ParkingPOS.png" alt="First slide" id="slide1">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ParkingPOS/Charging.png" alt="Second slide" id="slide2">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ParkingPOS/Overnight.png" alt="Third slide" id="slide3">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ParkingPOS/OrAndLogout.jpg" alt="Fourth slide" id="slide4">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/ParkingPOS/SummAndZ.jpg" alt="Fifth slide" id="slide5">
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
                <li>Vehicle Security because of the capture image comparison during arrival of the vehicle and before its exit.</li>
                <li>Auto compute of the total amount of parking fee based on hourly rate and lenght of stay of the vehicle inside of the parking vicinity including the overnight rate if have.</li>
                <li>Discount settings included the senior citizen discount with VAT exempt.</li>
                <li>BIR generated reports.</li>
                <li>Everyday reports of the vehicle that still remain inside the parking vicinity.</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                <li>Marikina City Hall North Parking
                    <ul>
                        <li>Official receipt based on Marikina City Hall parking ticket.</li>
                        <li>Generated reports based on Commission on Audit (COA)</li>
                        <li>Every 10 pm to 6 am of the next day, the parking rate from 20 pesos for 2 hrs with 15 pesos for every succeeding hr will become 20 pesos per hour.</li>
                    </ul>
                </li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                <li>Visual Studio Vb.net</li>
                <li>MySQL Database</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Device Integrated</h4>
                <li>13.56Mhz ISO 14443 A RFID Writer/Reader</li>
                <li>Epson Dot Matrix POS Printer</li>
                <li>USB Pole Display</li>
                <li>Cash Drawer</li>
                <li>Hikvision DVR and CCTV Camera</li>
                <li>TCP/IP Door Access Control Board (Trigger relay to open the parking barrier.)</li>
            </ul>

            <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                <li>Third Party Contractor of <a href="http://alphatech.com.ph/" target="_blank">Alphatech Trading</a> for <a href="https://www.marikina.gov.ph/" target="_blank">Marikina City Hall</a> parking project.</li>
            </ul>

            <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                <li>Vehicle security for being carnap or theft.</li>
                <li>Make every transaction and movement of vehicles faster because of automatic parking fee calculation.</li>
                <li>Prevent some human error like miscalculating the parking fee that could cause the parker's total fee to be reduced or overcharged.</li>
                <li>Easy and secure balancing of your parking revenue sales because of sales generated reports that you can compare to the actual money in the cash drawer and prevent any mishandling of money and become safe againts loss or theft.</li>
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
                                <a href="/ToyotaSurvey">Toyota Quezon Avenue Survey System with CMS</a>
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
