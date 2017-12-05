$(function(){
	$("body").niceScroll({
	    cursorcolor: "#1ba9d5", // change cursor color in hex
	    cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
	    cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
	    cursorwidth: "7px", // cursor width in pixel (you can also write "5px")
	    // cursorborderradius: "5px", // border radius in pixel for cursor
	    scrollspeed: 200, // scrolling speed
	    mousescrollstep: 40, // scrolling speed with mouse wheel (pixel)
	});
});