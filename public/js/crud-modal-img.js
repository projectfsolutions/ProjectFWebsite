$('document').ready(function(){

    $('#dataTable').DataTable({
        "lengthMenu": [5, 15, 20, 50, 100],
        "pageLength": 5
    });

    $('#btnBrowseAdd').on('click',function(){
        var file = $("#txtImgFileAdd");
        file.trigger("click");
    });

    $('#txtImgFileAdd').change(function(e){
        var imgFileName = e.target.files[0].name;
        $('#txtFileAdd').val(imgFileName);

        var imgPath = new FileReader();
        imgPath.onload = function(e){
            var path = e.target.result;
            document.getElementById("imgModalAdd").src = e.target.result;
        };
        imgPath.readAsDataURL(this.files[0]);
    });

    $('#btnBrowseUpd').on('click',function(){
        var imgFile = $("#txtImgFileUpd");
        imgFile.trigger("click");
    });

    $('#txtImgFileUpd').change(function(e){
        var imgFileName = e.target.files[0].name;
        $('#txtFileUpd').val(imgFileName);

        var imgPath = new FileReader();
        imgPath.onload = function(e){
            var path = e.target.result;
            document.getElementById("imgModalUpd").src = e.target.result;
        };
        imgPath.readAsDataURL(this.files[0]);
    });

});
