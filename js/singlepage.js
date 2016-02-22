jQuery(document).ready(function($) {  

	// Ingredients Tabs Function
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	// More Ingredients Function - Cooling
	$("#cooling dd").hide();
    $("#cooling dt").click(function () {
        $(this).next("#cooling dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });

	// More Ingredients Function - Warming
	$("#warming dd").hide();
    $("#warming dt").click(function () {
        $(this).next("#warming dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });

    // More Ingredients Function - Unscented
	$("#unscented dd").hide();
    $("#unscented dt").click(function () {
        $(this).next("#unscented dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });

	// FAQs function
	$("#faqs dd").hide();
    $("#faqs dt").click(function () {
        $(this).next("#faqs dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });


});