/*
 * ##### Sasson - advanced drupal theming. #####
 *
 * SITENAME scripts.
 *
 */

(function($) { 
	Drupal.behaviors.kaveret= {
			attach: function (context, settings) {
				$("#block-menu-menu-tabs ul li").hover(
 					function () {$("#block-menu-menu-tabs ul li a").addClass("hover-tats");},
					function () {$("#block-menu-menu-tabs ul li a").removeClass("hover-tats");}
				);
$("#block-menu-menu-tabs ul li a").hover(
 					function () {$("#block-menu-menu-tabs ul li ul").addClass("hover-tats");},
					function () {$("#block-menu-menu-tabs ul li ul").removeClass("hover-tats");}
				);
			}
	}
})(jQuery);

/*
(function($) {
  // DUPLICATE AND UNCOMMENT
	Drupal.behaviors.kaveret= {
		attach: function (context, settings) {
	 		("#block-menu-menu-tabs ul li").mouseover(function (){ ("#block-menu-menu-tabs ul li a").show("slow");})
	}
})(jQuery);
*/

  /* $("#block-menu-menu-tabs ul li").mouseover(function () {
		("#block-menu-menu-tabs").css({ "width: 194px" });
	    })
	    
	    ("#block-menu-menu-tabs ul li").mouseout(function () {
		("#block-menu-menu-tabs").css({ "width: 50px" });
	    });
	  });  
  }*/
     
  
