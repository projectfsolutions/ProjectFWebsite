$(function(){
    $(document).on('click','#home',function(){
        window.location.replace('/HomePage');
    });

    $(document).on('click','#about',function(){
        window.location.replace('/About');
    });

    $(document).on('click','#contactus',function(){
        window.location.replace('/ContactUs');
    });
});
