$(document).ready(function(){
    function clearAttriAdd(){
        $('#imgModalAdd').attr('src','https://via.placeholder.com/1200x600')
        $('#txtFileAdd').val('');
        $('#txtDescriptionAdd').val('');
        $('#intPositionAdd').val(0);
    };

    function clearAttrErrAdd(){
        $('#txtImgFileAddErr').empty();
        $('#txtDescriptionAddErr').empty();
        $('#intPositionAddErr').empty();
    };

    function clearAttrErrUpd(){
        $('#txtImgFileUpd').val('');
        $('#txtImgFileUpdErr').empty();
        $('#txtDescriptionUpdErr').empty();
        $('#intPositionUpdErr').empty();
    };


    $('#btnNewSlide').on('click',function(){
        clearAttriAdd();
    });

    $('#btnReq').on('click',function(){
        var formData = new FormData();

        formData.append('_txtImgFileAdd', $('#txtImgFileAdd')[0].files[0]);
        formData.append('_token', $('#_token').val());
        formData.append('_txtFileAdd', $('#txtFileAdd').val());
        formData.append('_txtDescriptionAdd',$('#txtDescriptionAdd').val());
        formData.append('_intPositionAdd',$('#intPositionAdd').val());

        $.ajax({
            url:'/AdminMainStore',
            type:'POST',
            data:formData,
            cache: false,
            processData: false,
            contentType: false,
            statusCode:{
                422:function(response){
                    clearAttrErrAdd();

                    var errors = response.responseJSON.errors;

                    $('#inpImgFileErr').text(errors['file_add']);
                    $('#txtDescriptionErr').text(errors['txtDescription']);
                    $('#inpPositionErr').text(errors['inpPosition']);
                },200:function(ret){
                    console.log(ret);

                    $('#ModalNewSlide .close').click();
                    location.reload();
                }
            }
        });
    });

    $('#ModalEditSlide').on('shown.bs.modal', function (e) {
        clearAttrErrUpd();

        var link = $(e.relatedTarget);
            var id = $(link).attr('rs-id');
            var FileName = $(link).attr('rs-FileName');
            var Description = $(link).attr('rs-Description');
            var Position = $(link).attr('rs-Position');

        if (id != undefined){
            $('#txtOldFile').val(FileName);

            $('#intUpdId').val(id);
            $('#txtFileUpd').val(FileName);
            $('#imgModalUpd').attr("src", 'storage/img/slider/' + FileName);
            $('#txtDescriptionUpd').val(Description);
            $('#intPositionUpd').val(Position);
        }
    });

    $('#btnEditReq').on('click',function(){
        var inpImg = $('#txtImgFileUpd').val();

        if (inpImg != ''){
            var formData = new FormData();

            formData.append('_txtImgFileUpd',$('#txtImgFileUpd')[0].files[0]);
            formData.append('_token', $('#_token').val());
            formData.append('_intUpdId', $('#intUpdId').val());
            formData.append('_txtFileUpd', $('#txtFileUpd').val());
            formData.append('_txtDescriptionUpd',$('#txtDescriptionUpd').val());
            formData.append('_intPositionUpd',$('#intPositionUpd').val());
            formData.append('_txtOldFile',$('#txtOldFile').val());

            $.ajax({
                url:'/AdminMainUpdate',
                type:'POST',
                data:formData,
                cache: false,
                processData: false,
                contentType: false,
                statusCode:{
                    422:function(response){
                        $('#ModalUpdate .close').click();
                        clearAttrErrUpd();

                        var errors = response.responseJSON.errors;

                        $('#txtFileUpdErr').text(errors['_txtFileUpd']);
                        $('#txtDescriptionUpdErr').text(errors['_txtDescriptionUpd']);
                        $('#intPositionUpdErr').text(errors['_intPositionUpd']);
                    },200:function(ret){
                        $('#ModalEditSlide').hide();
                        location.reload();
                    }
                }
            });
        }
        else{
            $.ajax({
                url:'/AdminMainUpdate',
                type:'post',
                data:{
                     _token:$('#_token').val()
                    ,_intUpdId:$('#intUpdId').val()
                    ,_txtFileUpd:$('#txtFileUpd').val()
                    ,_txtDescriptionUpd:$('#txtDescriptionUpd').val()
                    ,_intPositionUpd:$('#intPositionUpd').val()
                },
                statusCode:{
                    422:function(response){
                        $('#ModalUpdate .close').click();
                        clearAttrErrUpd();

                        var errors = response.responseJSON.errors;

                        $('#txtDescriptionUpdErr').text(errors['_txtDescriptionUpd']);
                        $('#intPositionUpdErr').text(errors['_intPositionUpd']);
                    },200:function(ret){

                        $('#ModalEditSlide .close').click();
                        location.reload();
                    }
                }
            });
        }
    });

    $('#ModalDeleteSlide').on('shown.bs.modal', function (e) {
        var link = $(e.relatedTarget);
            var id = $(link).attr('rs-id');
            var FileName = $(link).attr('rs-FileName');
            var Description = $(link).attr('rs-Description');

        if (id != undefined){
            $('#slider_id_del').val(id);
            $('#slider-fname-del').val(FileName);
            $('#slider-img-del').attr("src", 'storage/img/slider/' + FileName);
            $('#slider-desc-del').text(Description);
        }
    });

    $('#btnDeleteReq').on('click',function(){
        $.ajax({
            url:'/AdminMainDestroy',
            type:'post',
            data:{
                _token: $('meta[name="csrf-token"]').attr('content')
                ,id:$('#slider_id_del').val()
                ,fname:$('#slider-fname-del').val()
            },
            statusCode:{
                200:function(ret){
                    console.log(ret);
                    $('#ModalDeleteSlide .close').click();
                    location.reload();
                }
            }
        });
    });
});


