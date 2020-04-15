$(document).ready(function() {

		//should be fixed in core
    $('i.fa-rss').each(function() {
      	 $(this).addClass('fas');
  	} ); 
  	
  	//should be fixed in core
    $('.forum-viewtopic').find('ul.dropdown-menu li').each(function() {
  	 $(this).addClass('dropdown-item');
  	} ); 
    
    $('.forum-viewtopic').find('ul.dropdown-menu').each(function() {
  	 $(this).addClass('dropdown-menu-right');
  	} );     
    
    $('#forum-viewforum').find('ul.dropdown-menu').each(function() {
  	 $(this).addClass('dropdown-menu-right');
  	} ); 
    
    $('.btn-group').find('ul.dropdown-menu li').each(function() {
  	 $(this).addClass('dropdown-item');
  	} ); 
  	
    // hide #back-top first
    $("#back-top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
    
});