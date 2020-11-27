@extends('layouts.fLayout')

@section('content')

<section class="portfolio-sec">
    <div class="container">
        <div class="portfolio-hd">
            <h1 class="my-4">PORTFOLIO
                <small></small>
             </h1>
        </div>
        <hr class="portfolio-hr">
         <!-- Project One -->
        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/VMS.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Visitor Management System</h3>
                <p>Management and recording of visitors information with capture images.</p>
                <a class="btn btn-primary" href="#" id="#">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/RAIS.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Resident Access Monitoring System</h3>
                <p>Monitoring of residents who access the main entrance and exit doors of each tower in Grass Residences.</p>
                <a class="btn btn-primary" href="#" id="#">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/ParkingPOS.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Car Park Point-Of-Sale System</h3>
                <p>Revenue with fully automated parking.</p>
                <a class="btn btn-primary" href="#" id="ParkingPOS">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/Tupada.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Card Management System</h3>
                <p>Card Management System is uses to manage the issuance of the keycards to the customers who buying it to access the turnstile.</p>
                <a class="btn btn-primary" href="#" id="#">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/RMS.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>One Morayta Residence Management System</h3>
                <p>Management and monitoring of One Morayta Residence.</p>
                <a class="btn btn-primary" href="#" id="#">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/OneTurnstile.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>One Morayta Turnstile Access Control System</h3>
                <p>Monitoring and control for the student residents who pass through the turnstile.</p>
                <a class="btn btn-primary" href="#" id="OneTACS">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">

        <div class="portfolio-item row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Portfolio/Survey.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Toyota Survey Management System</h3>
                <p>Responsive Web-Based Survey System that they used to take survey to their clients via tablet.</p>
                <a class="btn btn-primary" href="#" id="#">Learn more</a>
            </div>
        </div>
        <hr class="portfolio-hr">
    </div>
</section>

@endsection
