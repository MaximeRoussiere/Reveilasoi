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
	  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top -150}, 900);
	  e.preventDefault();
	});    
	  
	
	});
	
		function onScroll(event){
			var scrollPosition = $(document).scrollTop();
			$('.nav__link').each(function () {
				var currentLink = $(this);
				var refElement = $(currentLink.attr("href"));
				if (refElement.position().top -200 <= scrollPosition && refElement.position().top -200 + refElement.height() > scrollPosition) {				
					currentLink.addClass("nav__link--active");
				}
				else{
					currentLink.removeClass("nav__link--active");
				}
			});
		}

	// Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});
  
  }
};

$(app.init);
