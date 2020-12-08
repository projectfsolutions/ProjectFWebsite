$('document').ready(function(){
    function clearAttriAdd(){
        $('#imgModalAdd').attr('src','https://via.placeholder.com/1200x600')
        $('#txtFileAdd').val('');
        $('#txtTitleAdd').val('');
        $('#txtDescriptionAdd').val('');
        $('#intPositionAdd').val(0);
        $('#txtImgPositionAdd').val('Left');
    };

    function clearAttrErrAdd(){
        $('#txtImgFileAddErr').empty();
        $('#txtTitleAddErr').empty();
        $('#txtDescriptionAddErr').empty();
        $('#intPositionAddErr').empty();
        $('#inpImgPositionAddErr').empty();
    };

    function clearAttrErrUpd(){
        $('#txtImgFileUpd').val('');
        $('#txtImgFileUpdErr').empty();
        $('#txtTitleUpdErr').empty();
        $('#txtDescriptionUpdErr').empty();
        $('#intPositionUpdErr').empty();
        $('#inpImgPositionUpdErr').empty();
    };

    $('#btnNewServices').on('click',function(){
        clearAttriAdd();
        clearAttrErrAdd();
    })

    $('#btnReq').on('click',function(){
        try{
            var servicesData = new FormData();

            servicesData.append('_txtImgFileAdd',$('#txtImgFileAdd')[0].files[0]);
            servicesData.append('_token',$('#_token').val());
            servicesData.append('_txtFileAdd',$('#txtFileAdd').val());
            servicesData.append('_txtTitleAdd',$('#txtTitleAdd').val());
            servicesData.append('_txtDescriptionAdd',$('#txtDescriptionAdd').val());
            servicesData.append('_intPositionAdd',$('#intPositionAdd').val());
            servicesData.append('_txtImgPositionAdd',$('#txtImgPositionAdd').val());

            $.ajax({
                url:'/AdminServicesStore',
                type:'POST',
                data:servicesData,
                cache: false,
                processData: false,
                contentType: false,
                statusCode:{
                    422:function(response){
                        clearAttrErrAdd();

                        var errors = response.responseJSON.errors;

                        $('#txtFileAddErr').text(errors['_txtFileAdd']);
                        $('#txtTitleAddErr').text(errors['_txtTitleAdd']);
                        $('#txtDescriptionAddErr').text(errors['_txtDescriptionAdd']);
                        $('#intPositionAddErr').text(errors['_intPositionAdd']);
                        $('#txtImgPositionAddErr').text(errors['_txtImgPositionAdd']);
                    },
                    200:function(){
                        location.reload();
                    }
                }
            });
        }
        catch(err){
            console.log('ERROR:' + err);
        }
    });

    $('#ModalEditServices').on('shown.bs.modal', function (e) {
        clearAttrErrUpd();

        var link = $(e.relatedTarget);

        var id = $(link).attr('rs-id');
        var FileName = $(link).attr('rs-FileName');
        var Title = $(link).attr('rs-Title');
        var Description = $(link).attr('rs-Description');
        var Position = $(link).attr('rs-Position');
        var ImgPosition = $(link).attr('rs-ImgPosition');

        if (id != undefined){
            $('#txtOldFile').val(FileName);

            $('#intUpdId').val(id);
            $('#txtFileUpd').val(FileName);
            $('#imgModalUpd').attr("src", 'storage/img/services/' + FileName);
            $('#txtTitleUpd').val(Title);
            $('#txtDescriptionUpd').val(Description);
            $('#intPositionUpd').val(Position);
            $('#txtImgPositionUpd').val(ImgPosition);
        }
    });

    $('#btnEditReq').on('click',function(){
        try{
            var inpImg = $('#txtImgFileUpd').val();

            if (inpImg != ''){
                var formData = new FormData();

                formData.append('_txtImgFileUpd',$('#txtImgFileUpd')[0].files[0]);
                formData.append('_token', $('#_token').val());
                formData.append('_intUpdId', $('#intUpdId').val());
                formData.append('_txtFileUpd', $('#txtFileUpd').val());
                formData.append('_txtTitleUpd', $('#txtTitleUpd').val());
                formData.append('_txtDescriptionUpd',$('#txtDescriptionUpd').val());
                formData.append('_intPositionUpd',$('#intPositionUpd').val());
                formData.append('_txtImgPositionUpd',$('#txtImgPositionUpd').val());
                formData.append('_txtOldFile',$('#txtOldFile').val());

                $.ajax({
                    url:'/AdminServicesUpdate',
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
                            $('#txtTitleUpdErr').text(errors['_txtTitleUpd']);
                            $('#txtDescriptionUpdErr').text(errors['_txtDescriptionUpd']);
                            $('#intPositionUpdErr').text(errors['_intPositionUpd']);
                            $('#txtImgPositionUpdErr').text(errors['_txtImgPositionUpd']);
                        },200:function(ret){
                            console.log(ret);
                            $('#ModalEditSlide').hide();
                            location.reload();
                        }
                    }
                });
            }
            else{
                $.ajax({
                    url:'/AdminServicesUpdate',
                    type:'post',
                    data:{
                        _token:$('#_token').val()
                        ,_intUpdId:$('#intUpdId').val()
                        ,_txtFileUpd:$('#txtFileUpd').val()
                        ,_txtTitleUpd:$('#txtTitleUpd').val()
                        ,_txtDescriptionUpd:$('#txtDescriptionUpd').val()
                        ,_intPositionUpd:$('#intPositionUpd').val()
                        ,_txtImgPositionUpd:$('#txtImgPositionUpd').val()
                    },
                    statusCode:{
                        422:function(response){
                            $('#ModalUpdate .close').click();
                            clearAttrErrUpd();

                            var errors = response.responseJSON.errors;

                            $('#txtTitleUpdErr').text(errors['_txtTitleUpd']);
                            $('#txtDescriptionUpdErr').text(errors['_txtDescriptionUpd']);
                            $('#intPositionUpdErr').text(errors['_intPositionUpd']);
                            $('#intImgPositionUpdErr').text(errors['_txtImgPositionUpd']);
                        },200:function(ret){
                            $('#ModalEditSlide').hide();
                            location.reload();
                        }
                    }
                });
            }
        }
        catch(err){
           console.log(err);
        }
    });

    $('#ModalDeleteServices').on('shown.bs.modal', function (e) {
        var link = $(e.relatedTarget);
        var id = $(link).attr('rs-id');
        var FileName = $(link).attr('rs-FileName');
        var Title = $(link).attr('rs-Title');
        var Description = $(link).attr('rs-Description');

        if (id != undefined){
            $('#intIdDel').val(id);
            $('#txtFileNameDel').val(FileName);
            $('#imgModalDel').attr("src", 'storage/img/services/' + FileName);
            $('#txtTitleDel').text(Title);
            $('#txtDescriptionDel').text(Description);
        }
    });

    $('#btnDeleteReq').on('click',function(){
        $.ajax({
            url:'/AdminServicesDestroy',
            type:'post',
            data:{
                 _token: $('meta[name="csrf-token"]').attr('content')
                ,_intIdDel:$('#intIdDel').val()
                ,_txtFileNameDel:$('#txtFileNameDel').val()
            },
            statusCode:{
                200:function(ret){
                    console.log(ret);
                    $('#ModalDeleteServices').hide();
                    location.reload();
                }
            }
        });
    });
});
