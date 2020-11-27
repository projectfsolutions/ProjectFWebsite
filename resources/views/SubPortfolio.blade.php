@extends('layouts.fLayout')

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
            <p>Posted on March 3, 2019 at 2:00 PM</p>

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
                        <img class="d-block w-100" src="img/Portfolio/OneTurnstile.jpg" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Portfolio/OneTACS/AntiPassBack.jpg" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Portfolio/OneTACS/Registration.jpg" alt="Third slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Portfolio/OneTACS/Logs.jpg" alt="Fourth slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Portfolio/OneTACS/Voice.jpg" alt="Fifth slide">
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
            <p class="lead">Monitoring and control for the student residents who pass through the turnstile.</p>

            <ul class="sub-portfolio-ul"><strong>System Main Features</strong>
                <li>Real-time access monitoring.</li>
                <li>Anti-passback security.</li>
                <li>Card registration expiration and renewal.</li>
                <li>Card access blocking.</li>
                <li>Time in and out logs report.</li>
            </ul>

            <ul class="sub-portfolio-ul"><strong>System Customized Unique Features</strong>
                <li>Software form factor design and color.</li>
                <li>Group access control (Specific time and day of the week that the student residents who listed is blocked to access the turnstile.)</li>
                <li>Voice prompt for every unsuccessful access to the turnstile because of failing to provide the necessary requirements to open it.</li>
            </ul>

            <ul class="sub-portfolio-ul"><strong>Development Technology</strong>
                <li>Visual Studio Vb.net</li>
                <li>MySQL Database</li>
            </ul>

            <ul class="sub-portfolio-ul"><strong>Device Integrated</strong>
                <li>Zk Access Control Reader</li>
            </ul>

            {{-- <hr class="portfolio-hr"> --}}

            {{-- <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer>
            </blockquote> --}}

            <!-- Comments Form -->
            {{-- <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>

            <!-- Single Comment -->
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <!-- Comment with nested comments -->
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>

                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>

              </div>
            </div> --}}

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
      </div>

</section>

@endsection
