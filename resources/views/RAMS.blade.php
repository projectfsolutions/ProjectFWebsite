@extends('layouts.fLayout')

@section('content')

<section class="sub-portfolio-sec">

    <div class="sub-portfolio-blog container">

        <div class="row">

          <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <div class="">
                    <h2 class="mt-4">Grass Residence Access Monitoring System</h2>
                </div>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Jessa Velgado</a>
                </p>

                <hr class="portfolio-hr">

                <!-- Date/Time -->
                <p>Posted on November 28, 2020</p>

                <hr class="portfolio-hr">

                <!-- Preview Image -->
                <div class="sub-porfolio-carousel">
                    <div class="">
                        <img class="d-block w-100 sub-portfolio-img" src="img/Portfolio/RAIS.png" alt="" id="slide1">
                    </div>
                </div>

                <hr class="portfolio-hr">

                <!-- Post Content -->
                {{-- <p class="lead">Earn revenue with fully automated parking.</p> --}}

                <ul class="sub-portfolio-ul"><h4>System Customized Unique Features</h4>
                    <li>Software design and color.</li>
                    <li>Monitoring of residents access information with picture.</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Development Technology</h4>
                    <li>C Sharp</li>
                    <li>Visual Studio</li>
                    <li>MySQL Database</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Device Integrated</h4>
                    <li>ST Server</li>
                </ul>

                <ul class="sub-portfolio-ul"><h4>Project Arrangement</h4>
                    <li>Third Party Contractor of <a href="" target="_blank">Synchronized Solutions Inc.</a> for <a href="" target="_blank">Grass Residences Quezon City</a> Door Access Control System.</li>
                </ul>

                <ul class="sub-portfolio-ul sub-portfolio-benefits"><h4>System Benefits</h4>
                    <li>Safety awareness of guards on duty if the keycard users are matched to the registered information that appeared in the system.</li>
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
