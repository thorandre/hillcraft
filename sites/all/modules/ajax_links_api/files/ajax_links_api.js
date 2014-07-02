(function ($) {
  var ajaxLoading = false;
  Drupal.behaviors.ajaxLinksApi = {
    attach: function (context, settings) {
	  var trigger = Drupal.settings.ajax_links_api.trigger;
	  $(trigger).click(function(e) {
		e.preventDefault();
		if(!ajaxLoading) {
		  ajaxLoading = true;
		  var url = $(this).attr("href");
		  var id = $(this).attr("rel");
		  if(id) {
			selector = $(this).attr("rel");
		  } else {
			selector = Drupal.settings.ajax_links_api.selector;
		  }
		  $(selector).html("<div class='loading'></div>");
		  ajaxLink(selector, url);
		}
	  });
    }
  };
  function  ajaxLink(selector, url) {
    $.ajax({
      url: url,
      type: "GET",
      data: "ajax=1",
      success: function (data, textStatus, xhr) {
        $(selector).html(data);
		Drupal.attachBehaviors(selector);
		
		var html5 = Drupal.settings.ajax_links_api.html5;
		if(html5 == 1) {
		  var title = data.match("<title>(.*?)</title>")[1]; // get title of loaded content	
		  window.history.pushState( {page : 1} , document.title, window.location.href ); // change title and url	
		  window.history.pushState( {page : 2} , title, url ); // Change url.
		  document.title = title; // Since title is not changing with window.history.replaceState(), 
		  //manually change title. Possible bug.
		  window.onpopstate = function (e) {
			  window.history.go(0);
		  };
		}
		
		// Views Pager.
	    // Please check http://drupal.org/node/1907376 for details.
		var viewsPager = Drupal.settings.ajax_links_api.vpager;
		if(viewsPager == 1) {
		  $(selector + " .view .pager a").each(function(){
			var href = $(this).attr('href');
			href = href.replace("?ajax=1", "");
			href = href.replace("&ajax=1", "");
			$(this).attr('href', href);
		  });
		}
		
		// Form Validation.
	    // Plese check http://drupal.org/node/1760414 for details.
		var formAction = $(selector + " form").attr('action');
		if (formAction) {
		  formAction = formAction.replace("?ajax=1", "");
		  $("form").attr('action', formAction);
		}
      },
      error: function (xhr, textStatus, errorThrown) {
		(selector).html("Access denied or page not found");
      }
    });
  }
})(jQuery);
