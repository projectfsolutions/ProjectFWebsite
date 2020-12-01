@extends('layouts.fLayout')

@section('content')
<section class="home-top-sec">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/Slides/idea1.jpg" alt="First slide">
                <div class="top-layer">
                    <h1 class="slide-hd-animate">YOU'VE GOT AN IDEA BUT YOU DIDN'T KNOW IF THAT IS POSSIBLE?</h1>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg animate__animated animate__fadeInDown animate__delay-2s" href="#services" role="button">LEARN MORE</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Slides/papers3.jpg" alt="Second slide">
                <div class="top-layer">
                    <h1 class="slide-hd-animate">TIRED FROM PAPER WORKS AND REPEATABLE MANUAL INTERVENTIONS?</h1>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg animate__animated animate__fadeInDown animate__delay-2s" href="#services" role="button">LEARN MORE</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Slides/projects2.jpg" alt="Second slide">
                <div class="top-layer">
                    <h1 class="slide-hd-animate">FINDING SOLUTIONS TO PROVIDE UNIQUE AUTOMATED SYSTEM FOR YOUR PARTICULAR PROJECT?</h1>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg animate__animated animate__fadeInDown animate__delay-2s" href="#services" role="button">LEARN MORE</a>
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
</section>
<section class="services-sec" id="services">
    <div class="container text-center services-hd">
        <h1>SERVICES</h1>
        <hr>
    </div>

    <div class="container">
        <div class="row services-div">
            <div class="services-text col-lg-6 aos-init aos-animate" data-aos-delay="500" data-aos="fade-right">
                <h1>Customized Software</h1>
                <p>Based on your requirements and idea workflow we make it possible by developing it using the latest technology for desktop application or web-based, whatever the best approach on your side to make your life convenient.</p>
            </div>

            <div class="col-lg-6 text-right aos-init aos-animate" data-aos="fade-left">
                <img class="services-img" src="img/Services/customized3.jpg" alt="Generic placeholder image" width="380" height="300">
            </div>
        </div>

        <div class="row services-div">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right">
                <img class="services-img" src="img/Services/integration.jpg" alt="Generic placeholder image" width="380" height="300">
            </div>

            <div class="services-text col-lg-6 col-md-6 col-sm-6 aos-init aos-animate" data-aos-delay="500" data-aos="fade-left">
                <h1>Software and Hardware Integration</h1>
                <p>Most of the hardware devices are for input and output purposes only, and we can maximize these potentials by creating and developing the software interface that can handle and decide what will happen to the inputted data and what will need to show as output.</p>
            </div>
        </div>

        <div class="row services-div">
            <div class="services-text col-lg-6 aos-init aos-animate" data-aos-delay="500" data-aos="fade-right">
                <h1>System Automation</h1>
                <p>Software customization based on your idea and with the integration of the proper devices, we can assure you to deliver your idea of being automated.</p>
            </div>

            <div class="col-lg-6 text-right aos-init aos-animate" data-aos="fade-left">
                <img class="services-img" src="img/Services/automation3.jpg" alt="Generic placeholder image" width="380" height="300">
            </div>
        </div>
    </div>
</section>

<section class="whatwedo-sec">
    <div class="container text-center whatwedo-hd">
        <h1>WHAT WE DO?</h1>
        <hr>
    </div>

    <div class="container text-center">
        <div class="row whatwedo-item">
            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/parking2.png" alt="Generic placeholder image" width="200" height="200">
                <h4>Parking System</h4>
                <p class="text-justify">Automated parking with desktop application interface integrated into devices that essentials to parking automation and security like parking barriers, CCTV camera, and RFID readers.</p>
            </div>

            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/turnstile.jpg" alt="Generic placeholder image" width="200" height="200">
                <h4>Turnstile Access Control System</h4>
                <p class="text-justify">Desktop application with real-time monitoring and control that integrated into RFID reader who read the tapping of cards and triggers to open the turnstile if the specific requirements of the application are provided like the card is must be registered and not yet expired, or not yet used for one-time entry or exit or in what we call the anti-passback system feature.</p>
            </div>

            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/student.png" alt="Generic placeholder image" width="200" height="200">
                <h4>Student Monitoring with SMS</h4>
                <p class="text-justify">Real-time monitoring of the students entry and exit access into the school premisses with SMS system feature that will inform the guardian or the parents of student that their child is already in the premisses or already leave by receiving the text message from the system with exact date and time.</p>
            </div>

            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/visitor1.png" alt="Generic placeholder image" width="200" height="200">
                <h4>Visitor Management System</h4>
                <p class="text-justify">Managing and monitoring the visitors by obtaining their personal information and what the purpose of their visit for the specific contact person in your establishment, with the help of an integrated camera that will capture the visitor's face and ID surrendered that you can retrieve anytime as logs report for your review on some security purposes matter.</p>
            </div>

            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/door.png" alt="Generic placeholder image" width="200" height="200">
                <h4>Door Access Control System</h4>
                <p class="text-justify">Limit and monitor the access of tenants based on what permission you've given to their respective keycards that will read by the integrated RFID reader and trigger the doors to open or to remain closed.</p>
            </div>

            <div class="col-lg-4">
                <img class="whatwedo-img" src="img/Services/website.png" alt="Generic placeholder image" width="200" height="200">
                <h4>Website Design with CMS</h4>
                <p class="text-justify">By combining the idea you want for your website and the research we will conduct about your business nature and target audiences, we can deliver you the ideal website that you shall be proud of. Also by providing you the CMS or the Content Management System, you can change the text content and images on your website.</p>
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

<section class="team-sec">
    <div class="container text-center">
        <div class="team-hd">
            <h1>OUR TEAM</h1>
            <hr>
        </div>

        <div class="row team-content">
            <div class="col-lg-6">
                <img class="team-img" src="img/Team/fer10.jpg" alt="">
                <div class="team-name">Fernan Cabrera</div>
                <div class="team-title">Lead Programmer</div>
            </div>

            <div class="col-lg-6">
                <img class="team-img" src="img/Team/jess2.jpg" alt="">
                <div class="team-name">Jessa Velgado</div>
                <div class="team-title">Lead Software Documentation</div>
            </div>
        </div>
    </div>
</section>

@endsection
