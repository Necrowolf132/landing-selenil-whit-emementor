
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