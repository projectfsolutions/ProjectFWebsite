@extends('layouts.admin')
@section('content')

<section class="main-tech">
    <h1 class="h3 mb-4 text-gray-800">Development Technology</h1>
    <hr>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary">New Technology</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Tech Image</th>
                    <th>File Name</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Slider Image</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td><img class="slider-td-img" src="img/Slides/projects2.jpg" alt=""></td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td><img class="slider-td-img" src="img/Slides/projects2.jpg" alt="Second slide"></td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td><img class="slider-td-img" src="img/Slides/projects2.jpg" alt="Second slide"></td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <hr>
</section>

@endsection
