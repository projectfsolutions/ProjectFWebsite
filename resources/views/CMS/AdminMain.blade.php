@extends('layouts.admin')
@section('content')

<section class="home-slider">
    <h1 class="h3 mb-4 text-gray-800" id="slider-modal-head">Home Page / Main Slider</h1>
    <hr>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNewSlide" id="btnNewSlide">
                <i class="fas fa-file"></i>  New Slider
            </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%">
              <thead>
                <tr>
                    <th>Slider Image</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Slider Image</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($vSlider as $sliderRec)
                <tr>
                <td><img class="slider-td-img" src="storage/img/slider/{{ $sliderRec->FileName }}" alt=""></td>
                  <td>{{ $sliderRec->FileName }}</td>
                  <td>{{ $sliderRec->Description }}</td>
                  <td>{{ $sliderRec->Position }}</td>
                  <td><button type="button" class="btn btn-success tdEdit" data-toggle="modal" data-target="#ModalEditSlide"
                    rs-Id="{{ $sliderRec->id }}" rs-FileName="{{ $sliderRec->FileName }}" rs-Description="{{ $sliderRec->Description }}" rs-Position="{{ $sliderRec->Position }}">
                    <i class="fas fa-pencil-alt"></i></button>
                    <button type="button" class="btn btn-danger tdDel" data-toggle="modal" data-target="#ModalDeleteSlide"
                    rs-id="{{ $sliderRec->id }}" rs-FileName="{{ $sliderRec->FileName }}" rs-Description="{{ $sliderRec->Description }}">
                    <i class="fas fa-trash-alt"></i></button></td>
                </tr>





                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <hr>

    <!-- Modal Add-->
    <div class="modal fade" id="ModalNewSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="Slider-Modal-Hd"><i class="fas fa-file"></i> New Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close1">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group text-right">
                        <img class="modal-img" src="https://via.placeholder.com/1200x600" alt="" id="imgModalAdd">
                    </div>

                    <div class="form-group">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                            <input type="file" id="txtImgFileAdd" class="file modal-data" accept="image/*">
                            <div class="input-group my-3">
                                <input type="text" class="form-control modal-data" disabled placeholder="Browse Image File" id="txtFileAdd">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-warning" id="btnBrowseAdd">Browse</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <small class="err" id="txtFileAddErr"></small>
                            </div>
                        </form>
                    </div>

                    <div class="form-group">
                        <label for="txtDescriptionAdd" class="col-form-label">Description:</label>
                        <textarea class="form-control modal-data" id="txtDescriptionAdd"></textarea>
                        <small class="err" id="txtDescriptionAddErr"></small>
                    </div>

                    <div class="form-group">
                        <label for="intPositionAdd" class="col-form-label">Position:</label>
                        <input type="number" class="form-control modal-data" id="intPositionAdd" name="position" min="0" max="100">
                        <small class="err" id=intPositionAddErr></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-close2">Close</button>
                    <button type="button" class="btn btn-primary" id="btnReq">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="ModalEditSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="Slider-Modal-Hd"><i class="fas fa-pencil-alt"></i> Update Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close1">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group text-right">
                        <img class="modal-img" src="https://via.placeholder.com/1200x600" alt="" id="imgModalUpd">
                        <input type="hidden" id="intUpdId">
                    </div>

                    <div class="form-group">
                        <form method="POST" enctype="multipart/form-data" id="image-form">
                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                            <input type="file" id="txtImgFileUpd" class="file modal-data form-control" accept="image/*">
                            <input type="hidden" id="txtOldFile">
                            <div class="input-group my-3">
                                <input type="text" class="form-control modal-data" disabled placeholder="Browse Image File" id="txtFileUpd">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-warning" id="btnBrowseUpd">Browse</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <small class="err" id="txtFileUpdErr"></small>
                            </div>
                        </form>
                    </div>

                    <div class="form-group">
                        <label for="txtDescriptionUpd" class="col-form-label">Description:</label>
                        <textarea class="form-control modal-data" id="txtDescriptionUpd"></textarea>
                        <small class="err" id="txtDescriptionUpdErr"></small>
                    </div>

                    <div class="form-group">
                        <label for="intPositionUpd" class="col-form-label">Position:</label>
                        <input type="number" class="form-control modal-data" id="intPositionUpd" name="position" min="0" max="100">
                        <small class="err" id=intPositionUpdErr></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-close2">Close</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalUpdate">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalDeleteSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="Slider-Modal-Hd"><i class="fas fa-trash-alt"></i> Delete Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close1">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group text-center">
                        <h4>Are you sure do you want to delete this slide?</h4>
                    </div>

                    <div class="form-group">
                        <img class="modal-img" src="https://via.placeholder.com/1200x600" alt="" id="slider-img-del">
                        <input type="hidden" name="slider_id" id="slider_id_del">
                    </div>

                    <div class="form-group">
                    <strong>File Name:</strong>
                        <input type="text" class="form-control modal-data" disabled id="slider-fname-del">
                    </div>

                    <div class="form-group">
                    <strong>Description:</strong>
                        <p id="slider-desc-del"></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-close2">No</button>
                    <form action="post">
                        <button type="button" class="btn btn-danger" id="btnDeleteReq">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-success" id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i> Update Slider</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body text-center">
            <H5>Are you sure do you want to save changes?</H5>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-success" id="btnEditReq">Yes</button>
            </div>
        </div>
        </div>
    </div>
</section>

@section('page_script')
    @parent
    <script src="{{asset('sbAdmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbAdmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/AdminMain.js')}}"></script>
@stop

@endsection
