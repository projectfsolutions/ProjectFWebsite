$('document').ready(function(){
    $('#aSaveAbout').on('click',function(){
        if ($(this).hasClass('btn-success')){
            $(this).removeClass('btn-success').addClass('btn-primary').text('Save');
            return false;
        }

        $.ajax({
            url:'/AdminAbout',
            type:'POST',
            data:{
                _token: $('meta[name="csrf-token"]').attr('content')
                ,form: {
                    txtAbout:$('#txtAbout').val()
                    ,txtVision:$('#txtVision').val()
                    ,txtMission:$('#txtMission').val()
                }
//                data:window.btoa(JSON.stringify(ajx))
//                data:JSON.stringify(ajx)
//                data:null
            },statusCode:{
                200:function(){
                    $('#txtAboutErr').empty();
                    $('#txtVisionErr').empty();
                    $('#txtMissionErr').empty();

                    var aAlert = '';
                    aAlert += '<div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">';
                    aAlert += '<div class="btn btn-success btn-circle btn-sm" >';
                    aAlert += '<span class="icon">';
                    aAlert += '<i class="fas fa-check"></i>';
                    aAlert += '</span>';
                    aAlert += '</div>';
                    aAlert += '<strong>  Success!</strong> Company about updated successfully.';
                    aAlert += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                    aAlert += '<span aria-hidden="true">&times;</span>';
                    aAlert += '</button>';

                    $('#MainPageAlert').empty();
                    $('#MainPageAlert').append(aAlert);

                    $("#success-alert").fadeTo(5000, 500).slideUp(500, function() {
                        $("#success-alert").slideUp(500);
                    });

                },422:function(response){
                    $('#txtAboutErr').empty();
                    $('#txtVisionErr').empty();
                    $('#txtMissionErr').empty();

                    var errors = response.responseJSON.errors;

                    $('#txtAboutErr').text(errors['form.txtAbout']);
                    $('#txtVisionErr').text(errors['form.txtVision']);
                    $('#txtMissionErr').text(errors['form.txtMission']);
                }
            }
        });
    });
});
