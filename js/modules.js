//modules storing
var modules = {
	registration : function(){
		for(var i in this){
			if(i.toString() !== "registration"){
				regToCore(i, this[i]);
			}
		}
		//function to registrate in core
		function regToCore(moduleName, moduleObject){
			self.core.registrate(moduleName, moduleObject());
		}
	}
}


/*
  ---------------*----------------
	HERE DESCRIPTION OF CORE MODULES
	---------------*----------------
*/
modules["overlay-module"] = function(){
	var init = function(){

	}
	var worker = function(){

	}
	return {
		initialize : init,
		worker : worker
	}
	//place for private methods!

	//end of private methods!
}

modules["modal-window-module"] = function(){
	/*data
		data object need to store function 
		that get's from page overlay and modal
		objects
	*/
	var opened = [];
	var data = {
		overlay : function(){
			return $(".overlay")
		},
		modal : function(){
			return $(".modal-window");
		}
	}
	/*main functions*/
	var init = function(){
		//custom need to refactoring
		preparation();
		worker();
	}
	var worker = function(){
		$("#js-module-modal").live("click", function(){
			var data = $(this).attr("data-target");
			showModal($("#"+data));
		});
		$(".close-button").live("click", function(){
			closeModal();
			closeOverlay();
		});
	}
	return {
		initialize : init,
		worker : worker
	}

	/*preparation
		method to set to .overlay element on page the document height
	*/
	function preparation(){
		var docHeight = $(document).height();
		data.overlay().css({
			height : docHeight
		});
		data.overlay().bind("click", function(){
			closeOverlay();
			closeModal();
		});
		$(document).bind("keydown", function(e){
			if(e.keyCode == 27){
				closeOverlay();
				closeModal();
			}
		});
	}
	/*closeOverlay
		methods to hide the current overlay element on page
		they have .overlay class name
	*/
	function closeOverlay(){
		data.overlay().fadeOut("middle");
	}
	/*openOverlay
		method to show the current overlay element on page
	*/
	function openOverlay(){
		data.overlay().fadeIn("middle");
	}
	/*show modal
		method that find the modal on page and set class name += block
	*/
	function showModal(modal){
		openOverlay();
		opened.push(modal);
		var scrollTop = $(document).scrollTop();
		modal.show().css({
			top : scrollTop + 50
		});
	}
	/*closeModal
		method to find modal window in page
		and hide it
	*/
	function closeModal(){
		var len = opened.length;
		for(var i = 0; i < len; i++){
			opened[i].hide();
			opened[i] = null;
		}
		opened.length = 0;
	}
}


modules["select-autocomplete-module"] = (function(){
	var data = {
		getElements : function(){
			return $(".js-select-autocomplete");
		}
	}
	var init = function(){
		var ob = data.getElements();
		if(ob.length > 0){
			ob.each(function(){
				$(this).on("change", function(){
					worker($(this));
				});
			});
		}
	}
	var worker = function(object){
		var target = $("#" + object.attr("data-target"));
		var value  = "company=" + object.val();
		var url    = target.attr("data-target-url");
		$.ajax({
			url : url,
			type : "POST",
			data : value,
			success : function(html){
				target.removeAttr("disabled");
				target.html("<option value=''>Любая</option>");
				target.append(html);
			},
			error : function(){
				alert("Some error in worker => module => select-autocomplete")
			},
			beforeSend : function(){
				target.attr("disabled", "true");
			}
		});
	}
	return {
		initialize : init,
		worker : worker
	}
});

modules["dropdown-menu-module"] = (function(){
	var data = {
		dropdownActive : function(){
			return $(".dropdown-open");
		},
		speedToggle : "middle"
	}
	var init = function(){
		var T_ST = data.dropdownActive();
		T_ST.each(function(){
			$(this).live("click", function(e){
				worker($(this));
				return false;
			});
		});
	}	
	var worker = function(object){
		//this is not good solution
		//need to REFACTORING!
		//or use => blur!
		var dr = object.parent().find(".dropdown-menu");
		open(dr);
		bindBlur(dr);
	}
	return{
		initialize : init,
		worker : worker
	}
	function open(el){
		el.fadeIn(data.speedToggle);
	}
	function close(el){
		el.fadeOut(data.speedToggle);
	}
	function bindBlur(dr){
		$(document).bind("click.DROPDOWN", function(e){
			close(dr);
		});
		$(document).bind("keydown.DROPDOWN", function(e){
			if(e.keyCode == 27)
				close(dr);
		});
	}
});

modules["buttons-link-module"] = (function(){
	var data = {
		getButtons : function(){
			return $(".js-button-link");
		}
	}
	var init = function(){
		var btns = data.getButtons();
		btns.each(function(){
			$(this).live("click", function(){
				worker($(this));
			});
		});
	}
	var worker = function(object){
		if(object.attr("href")){
			window.location.replace(object.attr("href"));
		}else{
			throw "Need attribute href => button link";
		}
	}
	return {
		initialize : init,
		worker : worker
	}
});
/*
	DO NOT REMOVE THIS, BECAUSE HERE START'S
	ALL MODULES FROM REGISTRATED MODULES!
*/
$(document).ready(function(){
	//when all dom structure are ready
	//we can start all processing!
	modules.registration();
	self.core.initializeAll();		
});
