!function($) {
	var openClass = "open";
	var dropDown = (function(){
		var $this = $(this);
		$this.live("click", open)
	});

	function open(){
		var parent = $(this).parent();
		parent.addClass(openClass)
	}
	function close(){
		var parent = $(this).parent();
		parent.removeClass(openClass);
	}
	
	//--Definition of plugin--//
	$.fn.DropDown = dropDown;
	//--End--//
}(window.jQuery);