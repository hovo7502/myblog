jQuery( document ).ready(function($) {

    // Mobile Menu
    $(".headerMenuClick").click(function(){
    	$(".slideMenuOpen").slideToggle();
    });

    // SVG Injector
	var mySVGsToInject = document.querySelectorAll('img.inject');
	SVGInjector(mySVGsToInject);

});

