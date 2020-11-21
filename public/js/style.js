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

