;(function($){

  

  function isHome(){
      return $('body').hasClass('home');
    }
    
  
    $('.contact-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });


    $('.anuncio-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
      });

$(window).load(function() {
      
      resize();
     

});


$(window).resize(resize);

function resize () {
   responsive();
}

function responsive() {
           
               

               
            
}


    
})(jQuery);

