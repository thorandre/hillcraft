(function ($) {

/**
 * Attach the carouFredSel slider to matching elements
 */
Drupal.behaviors.carouFredSel_slider = {
  attach: function (context, settings) {
    $.each(settings.caroufredsel_slider, function(selector, config){
      $('#' + selector, context).carouFredSel(config);
    });
  }
};

})(jQuery);
