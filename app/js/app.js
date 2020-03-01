var app = {
  init: function() {
    console.log('init');

    // ANIME HEADER NAVBAR SCROLL

    $(window).on('scroll', function(){
      if($(window).scrollTop())
    {
      $('nav').addClass('black');
    }    
      else
    {
      $('nav').removeClass('black');
    }
  })

    // ANIME HEADER NAVABAR RESPONSIVE ONCLICK

  $(document).ready(function(){
	  $(".menu h4").click(function(){
		  $("nav ul").slideToggle(750);  
		});
		$(window).resize(function() {		
			if (  $(window).width() > 1500 ) {			
				$('nav ul').removeAttr('style');
			}
		});
  });

  // ACTIVE HEADER LINKS ON SCROLL

  $(function(){
	
	$(document).on('scroll', onScroll);  
	
	$("body").on('click', '[href*="#"]', function(e){  
	  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top}, 1000);
	  e.preventDefault();
	});    
	  
	
	});
	
		function onScroll(event){
			var scrollPosition = $(document).scrollTop();
			$('.nav__link').each(function () {
				var currentLink = $(this);
				var refElement = $(currentLink.attr("href"));
				if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {				
					currentLink.addClass("nav__link--active");
				}
				else{
					currentLink.removeClass("nav__link--active");
				}
			});
		}
  
  }
};

$(app.init);
