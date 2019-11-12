
jQuery(document).ready(function(){
    var nav_offset_top = jQuery('header').height() + 10; 
    /*-------------------------------------------------------------------------------
      Navbar 
    -------------------------------------------------------------------------------*/
    
    //* Navbar Fixed  
    function navbarFixed(){
        if ( ('.header-top').length ){ 
            jQuery(window).scroll(function() {
                var scroll = jQuery(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    jQuery(".header-top").addClass("relieve");
                } else {
                    jQuery(".header-top").removeClass("relieve");
                }
            });
        };
    };
    navbarFixed();

});

jQuery('a[href^="#-"]').click(rodar);

 function  rodar(event) {
    this.preventDefault();
    var destino = jQuery(this.hash).offset().top;
    destino =  jQuery(this.hash);
    if (destino.length == 0) {
        console.log('estoy aqui 2');
        destino = jQuery('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
        console.log('estoy aqui 3');
        destino = jQuery('html');
    }
    var mover =   jQuery(this.hash).offset().top;
    console.log(mover);
    jQuery('html, body').animate({ scrollTop: mover + 120});

    return false;

}