@extends('layouts.admin')
@section('content')

<section class="home-services">
    <h1 class="h3 mb-4 text-gray-800">Home Page / Services</h1>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNewServices" id="btnNewServices"><i class="fas fa-file"></i> New Services</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Services Image</th>
                    <th>File Name</th>
                    <th>Title</th>
                    <th>Service Description</th>
                    <th>Position</th>
                    <th>Image Position</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Services Image</th>
                    <th>File Name</th>
                    <th>Title</th>
                    <th>Service Description</th>
                    <th>Position</th>
                    <th>Image Position</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($vServices as $vServicesRec)
                    <tr>
                        <td><img class="slider-td-img" src="storage/img/services/{{ $vServicesRec->FileName }}" alt=""></td>
                        <td>{{ $vServicesRec->FileName }}</td>
                        <td>{{ $vServicesRec->Title}}</td>
                        <td>{{ $vServicesRec->Description}}</td>
                        <td>{{ $vServicesRec->Position }}</td>
                        <td>{{ $vServicesRec->ImgPosition }}</td>
                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalEditServices"
                            rs-Id="{{ $vServicesRec->id }}"
                            rs-FileName="{{ $vServicesRec->FileName }}"
                            rs-Title="{{ $vServicesRec->Title }}"
                            rs-Description="{{ $vServicesRec->Description }}"
                            rs-Position="{{ $vServicesRec->Position }}"
                            rs-ImgPosition="{{ $vServicesRec->ImgPosition }}">
                            <i class="fas fa-pencil-alt"></i></button>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteServices"
                            rs-Id="{{ $vServicesRec->id }}"
                            rs-FileName="{{ $vServicesRec->FileName }}"
                            rs-Title="{{ $vServicesRec->Title }}"
                            rs-Description="{{ $vServicesRec->Description }}">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <hr>

    <!-- Modal Add-->
    <div class="modal fade" id="ModalNewServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="Slider-Modal-Hd"><i class="fas fa-file"></i> New Services</h5>
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
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <input type="file" id="txtImgFileAdd" name="txtImgFileAdd" class="file modal-data" accept="image/*">
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
                        <label for="txtTitleAdd" class="col-form-label">Title:</label>
                        <input type="text" class="form-control modal-data" id="txtTitleAdd">
                        <small class="err" id=txtTitleAddErr></small>
                    </div>

                    <div class="form-group">
                        <label for="txtDescriptionAdd" class="col-form-label">Services Description:</label>
                        <textarea class="form-control modal-data" id="txtDescriptionAdd"></textarea>
                        <small class="err" id="txtDescriptionAddErr"></small>
                    </div>

                    <div class="form-group">
                        <label for="intPositionAdd" class="col-form-label">Position:</label>
                        <input type="number" class="form-control modal-data" id="intPositionAdd" min="0" max="100">
                        <small class="err" id=intPositionAddErr></small>
                    </div>

                    <div class="form-group">
                        <label for="txtImgPositionAdd" class="col-form-label">Image Position:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="txtImgPositionAdd">Options</label>
                            </div>
                            <select class="custom-select" id="txtImgPositionAdd">
                              <option selected>Left</option>
                              <option value="Right">Right</option>
                            </select>
                        </div>
                        <small class="err" id=txtImgPositionAddErr></small>
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
    <div class="modal fade" id="ModalEditServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="Slider-Modal-Hd"><i class="fas fa-pencil-alt"></i> Update Services</h5>
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
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <input type="file" id="txtImgFileUpd" name="txtImgFileAdd" class="file modal-data" accept="image/*">
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
                        <label for="txtTitleUpd" class="col-form-label">Title:</label>
                        <input type="text" class="form-control modal-data" id="txtTitleUpd">
                        <small class="err" id=txtTitleUpdErr></small>
                    </div>

                    <div class="form-group">
                        <label for="txtDescriptionAdd" class="col-form-label">Services Description:</label>
                        <textarea class="form-control modal-data" id="txtDescriptionUpd"></textarea>
                        <small class="err" id="txtDescriptionUpdErr"></small>
                    </div>

                    <div class="form-group">
                        <label for="intPositionUpd" class="col-form-label">Position:</label>
                        <input type="number" class="form-control modal-data" id="intPositionUpd" min="0" max="100">
                        <small class="err" id=intPositionUpdErr></small>
                    </div>

                    <div class="form-group">
                        <label for="txtImgPositionUpd" class="col-form-label">Image Position:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="txtImgPositionUpd">Options</label>
                            </div>
                            <select class="custom-select" id="txtImgPositionUpd">
                              <option selected>Left</option>
                              <option value="Right">Right</option>
                            </select>
                        </div>
                        <small class="err" id=txtImgPositionUpdErr></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-close2">Close</button>
                    <form action="POST">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalUpdate">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete-->
    <div class="modal fade" id="ModalDeleteServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="Slider-Modal-Hd"><i class="fas fa-trash-alt"></i> Delete Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close1">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group text-center">
                        <h4>Are you sure do you want to delete this services?</h4>
                    </div>

                    <div class="form-group">
                        <img class="modal-img" src="https://via.placeholder.com/1200x600" alt="" id="imgModalDel">
                        <input type="hidden" name="slider_id" id="intIdDel">
                    </div>

                    <div class="form-group">
                    <strong>File Name:</strong>
                        <input type="text" class="form-control modal-data" disabled id="txtFileNameDel">
                    </div>

                    <div class="form-group">
                    <strong>Title:</strong>
                        <h5 id="txtTitleDel"></h5>
                    </div>

                    <div class="form-group">
                    <strong>Description:</strong>
                        <p id="txtDescriptionDel"></p>
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
            <h5 class="modal-title text-success" id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i> Update Services</h5>
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
    <script src="{{asset('js/AdminServices.js')}}"></script>
@stop

@endsection
