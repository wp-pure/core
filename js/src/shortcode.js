

jQuery(document).ready(function($){

	$( "pre,code" ).each(function(){ 
		var $el = $(this);
		$el.html( $el.html().replace(/{/g,"[").replace(/}/g,"]") );
	})

});

