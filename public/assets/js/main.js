$(document).ready(function(){
    $('ul.tabs').each(function(){
	var $active, $content, $links = $(this).find('a');
	
				    
	$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
	$active.addClass('active');
	$content = $($active.attr('href'));
	
	
	$links.not($active).each(function () {
	    $($(this).attr('href')).hide();
	});
	
				    
	$(this).on('click', 'a', function(e){
					    
	    $active.removeClass('active');
	    $content.hide();
	    
						
	    $active = $(this);
	    $content = $($(this).attr('href'));
	    
						
	    $active.addClass('active');
	    $content.show();
	    
						
	    e.preventDefault();
	});
    });
});

$(document).ready(function($) {
      $('#photo a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });


 $(function () {
    $(".youtube").YouTubePopup({ autoplay: 0 });
    $(".youtube").YouTubePopup({ hideTitleBar: true });
});
 
$(function(){
      SyntaxHighlighter.all();
});

    $(window).load(function(){
	$('.flexslider').flexslider({
        animation: "slide",
	    start: function(slider){
	    $('body').removeClass('loading');
	    }
    });
});

 


(function($){

$(document).ready(function(){


       var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34963602-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


}); //end document ready

})(jQuery); //end private scope
