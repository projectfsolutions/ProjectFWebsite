var distance = $('#m-navar').offset().top;

$(window).scroll(function() {
    console.log(distance)
    if ( $(this).scrollTop() >= distance ) {
        var element = document.getElementById("m-navar");
            element.classList.add("fixed-top");
    }
    else{
        var element = document.getElementById("m-navar");
        element.classList.remove("fixed-top");
    }
});

AOS.init({
    duration: 1200,
  })

$(function(){
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");

    $(document).on('click','.sub-portfolio-img',function(){

        modal.style.display = "block";
        modalImg.src = this.src;
    });

    $(document).on('click','#xModal',function(event){
        modal.style.display = "none";
    });


    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    setTimeout(function() {
        $("#loader").hide('blind', {}, 500)
    }, 1100);
});





