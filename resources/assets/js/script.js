$( document ).ready(function() {
	$("body").vegas({
		timer : false,
	    slides: [
	        { src: "/img/slide1.jpg" },
	        { src: "/img/slide2.jpg" },
	        { src: "/img/slide3.jpg" }
	    ],
	    overlay: "/img/overlays/08.png",
	    animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
	});
});
