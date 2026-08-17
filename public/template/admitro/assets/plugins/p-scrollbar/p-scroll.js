(function($) {
	"use strict";
	
	
	if (document.querySelector('.message-menu')) {
		const ps1 = new PerfectScrollbar('.message-menu', {
		  useBothWheelAxes:true,
		  suppressScrollX:true,
		});
	}

	if (document.querySelector('.notify-menu')) {
		const ps2 = new PerfectScrollbar('.notify-menu', {
		  useBothWheelAxes:true,
		  suppressScrollX:true,
		});
	}
	
	
})(jQuery);