jQuery(function( $ ){
	$(window).on('load', function(){
		$('.images-grid').slick({
		  	infinite: false,
		  	slidesToShow: 3,
		  	slidesToScroll: 3,
		  	dots: true
		});
	});
});