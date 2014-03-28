(function ($) {

	$(function(){
  			
		// Form Label Fades - Text input
		$('.webform-client-form .form-text, .mail-list input[type="text"]').focus(function() {
			$(this).parent().find('label:first').fadeOut();
		});
		$('.webform-client-form .form-text, .mail-list input[type="text"]').blur(function() {
			var inputval = $(this).val();
			if (inputval == "") {
				$(this).parent().find('label:first').fadeIn();
			}
		});
		
		// Form Label Fades - Textarea
		$('.webform-client-form textarea').focus(function() {
			$(this).parent().parent().find('label:first').fadeOut();
		});
		$('.webform-client-form textarea').blur(function() {
			var inputval = $(this).val();
			if (inputval == "") {
				$(this).parent().parent().find('label:first').fadeIn();
			}
		});
		
		// Comment Form Validate
		$('.webform-client-form').each(function(){
			$(this).validate();
		});
        
        // Gowns Masonary
		var $container = $('#block-views-gowns-block-2 .view-content');
		$container.imagesLoaded( function(){
			$container.masonry({
		    	itemSelector : '.views-row'
		    });
		});
		
		// Gowns Thumb Select IMG
		$('.node-type-gown .left li').hide();
		$('.node-type-gown .left li:first').show();
		$('.node-type-gown .thumbs li').click(function(){
			var thumbIndex = $(this).index();
			var largeIndex = $('.node-type-gown .left li').index();
			$('.node-type-gown .left li').fadeOut();
			$('.node-type-gown .left li').eq(thumbIndex).fadeIn();
		});

		// Gowns Zoom
        $('.node-type-gown .left img').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom();
        
        // Theater Slider
        $('.view-theater .view-content').flexslider({
	        controlNav: false
        });

		
	});  	

})(jQuery);

