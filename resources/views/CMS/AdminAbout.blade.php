@extends('layouts.admin')
@section('content')

<section>
    <h1 class="h3 mb-4 text-gray-800">About Page</h1>
<hr>

  <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">

        <div id="MainPageAlert" >
        </div>

        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">About</h1>
                </div>

                  @foreach($AdminAbout as $AbtInfo)
                  <div class="form-group">
                      <textarea id="txtAbout" class="form-control" placeholder="">{{$AbtInfo->About}}</textarea>
                      <div class="err" id="txtAboutErr"></div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="text-center">
                       <h1 class="h4 text-gray-900 mb-4">Vision</h1>
                      </div>
                      <textarea id="txtVision" type="text" class="form-control" placeholder="">{{$AbtInfo->Vision}}</textarea>
                      <div class="err" id="txtVisionErr"></div>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-center">
                       <h1 class="h4 text-gray-900 mb-4">Mission</h1>
                      </div>
                      <textarea id ="txtMission" type="text" class="form-control" placeholder="">{{$AbtInfo->Mission}}</textarea>
                      <div class="err" id="txtMissionErr"></div>
                    </div>
                  </div>
                  @endforeach
                  <hr>

                  <form class = 'user'>
                      <div class="form-group row">

                          <div class="col-sm-4">
                              <p> </p>
                          </div>

                          <div class="col-sm-4">
                              <a id='aSaveAbout' href="#" class="btn btn-primary btn-user btn-block btn-icon-split">
                                Save
                              </a>
                          </div>
                      </div>
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

</section>

@section('page_script')
    @parent
    <script src="{{asset('js/AdminAbout.js')}}"></script>
@stop

@endsection
