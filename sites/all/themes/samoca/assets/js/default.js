


(function($) {
	
	$(document).ready(function(){
		
	$('.logo').click(function(){
		window.open('..');
	});	
	if($('.galleri')){
		var nySrc = $('.galleri').children().children().children().children().attr('src');
		
		$('.galleri').children('img').attr('src', nySrc);
		$('.galleri').children('img').click(function(){
			window.open(nySrc, '', '_blank'); 
		});
		$('.galleri').children().children().children().each(function(){
			$(this).css('width', '20%');
			$(this).css('display', 'inline-block');
			$(this).css('margin-right', '10px');
			$(this).click(function(){
				nySrc = $(this).children().attr('src');
				
				$('.galleri').children('img').hide() //Hide it
		        .one('load', function() { //Set something to run when it finishes loading
		          $(this).fadeIn(); //Fade it in when loaded
		        })
		        .attr('src', nySrc) //Set the source so it begins fetching
		        .each(function() {
		          //Cache fix for browsers that don't trigger .load()
		          if(this.complete) $(this).trigger('load');
		        });
			});
		});
		
	};
});

	
})(jQuery);