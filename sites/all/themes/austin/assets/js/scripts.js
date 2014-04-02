(function ($) {

	$(function(){
  			
		// Form Label Fades - Text input
		$('.webform-client-form .form-text, .mail-list input[type="text"]').focus(function() {
			$(this).parent().find('label:first').fadeOut(300);
		});
		$('.webform-client-form .form-text, .mail-list input[type="text"]').blur(function() {
			var inputval = $(this).val();
			if (inputval == "") {
				$(this).parent().find('label:first').fadeIn(300);
			}
		});
		
		// Form Label Fades - Textarea
		$('.webform-client-form textarea').focus(function() {
			$(this).parent().parent().find('label:first').fadeOut(300);
		});
		$('.webform-client-form textarea').blur(function() {
			var inputval = $(this).val();
			if (inputval == "") {
				$(this).parent().parent().find('label:first').fadeIn(300);
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
		$('.gown-images li').hide();
		$('.gown-images li:first').show();
		$('.gown-info .thumbs li').click(function(){
			var thumbIndex = $(this).index();
			var largeIndex = $('.gown-images li').index();
			$('.gown-images li').fadeOut();
			$('.gown-images li').eq(thumbIndex).fadeIn();
		});

		// Gowns Zoom
        $('.gown-images img').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom();
        
        // Theater Slider
        $('.sidebar-slider .slides').bxSlider({
            pager: false
        });
		
	});  	

})(jQuery);

