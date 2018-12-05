$(document).ready(function () {

    
     $('.navbar-nav').on('click', function(){ 
        if($('.navbar-header .navbar-toggle').css('display') !='none'){
            $(".navbar-header .navbar-toggle").trigger( "click" );
        }
    });
    


    if (/Mobi/.test(navigator.userAgent)) {
            $('#main img').addClass('img-responsive-removed').removeClass('img-responsive');
        } else {
            $('#main img').addClass('img-responsive').removeClass('img-responsive-removed');
        }
    
    

    $(".navbar a, footer a[href='#myPage'], .arrow a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - 80
            }, 900, function () {

                window.location.hash = $(hash).offset().top - 80;
            });
        } 
    });





    var $body = $(document.body);
    var navHeight = $('.navbar').outerHeight(true) + 10;

    $('#sidebar').affix({
        offset: {
            top: 100,
            bottom: navHeight
        }
    });


    $body.scrollspy({
        target: '#leftCol',
        offset: navHeight
    });



var myIndex = 0;
carousel();   
    
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}




});
