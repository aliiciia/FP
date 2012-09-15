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