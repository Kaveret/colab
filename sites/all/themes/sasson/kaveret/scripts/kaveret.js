/*
 * ##### Sasson - advanced drupal theming. #####
 *
 * SITENAME scripts.
 *
 */

(function($) {

  // DUPLICATE AND UNCOMMENT
  Drupal.behaviors.kaveret= {
   attach: function (context, settings) {
   $("#block-menu-menu-tabs ul li").mouseover(function () {
		("#block-menu-menu-tabs").css({ "width: 194px" });
	    })
	    
	    ("#block-menu-menu-tabs ul li").mouseout(function () {
		("#block-menu-menu-tabs").css({ "width: 50px" });
	    });
	  });  
  }
  };
})(jQuery);
