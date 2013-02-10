/*
 * ##### Sasson - advanced drupal theming. #####
 *
 * SITENAME scripts.
 *
 */

(function($) { 
 Drupal.behaviors.kaveret= {
attach: function (context, settings) {
/*$("#block-menu-menu-tabs ul li").mouseover(
  function () {
  if ( jQuery.css( this, "left" ) === "-180px" )
  {$(this).animate({"left": "+=180px"}, 500);}
  });
  $("#block-menu-menu-tabs ul li").mouseout(
  function () {
  if ( jQuery.css( this, "left" ) === "0px")
  {$(this).animate({"left": "-=180px"}, 500);} 
  });*/
}
}


$(document).ready(function(){
	/*$('#block-menu-menu-tabs ul li').click(

	  function() {

	  $(this).css("margin-left","0" );


	  } );*/
	$("#block-menu-menu-tabs ul li").click(
		function () {
		if ( jQuery.css( this, "margin-left" ) === "-180px" )
		{$(this).animate({"margin-left": "+=180px"}, 500);}
		else
		{
		if ( jQuery.css( this, "margin-left" ) === "0px")
		{$(this).animate({"margin-left": "-=180px"}, 500);} 
		}
		});
	$("#block-views-about-group-block-3").mouseover(
		function()
		{
			$("view-id-about_group").css( "display", "block");
		}

		);


});  
})(jQuery);

