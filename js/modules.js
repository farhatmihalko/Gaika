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
		//add to sandbox functionality and module
		T_SANDBOX.addModule("modal", {
			close : function(){
				fullClose();
			},
			getOpened : function(){
				return opened;
			}
		});
	}
	var worker = function(){
		$("#js-module-modal").live("click", function(){
			var data = $(this).attr("data-target");
			showModal($("#"+data));
		});
		$(".close-button").live("click", function(){
			fullClose();
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
			return false;
			fullClose();
		});
		$(document).bind("keydown", function(e){
			if(e.keyCode == 27)
				fullClose();
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
	function fullClose(){
		closeModal();
		closeOverlay();
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
				target.html("<option value='Любая'>Любая</option>");
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

modules["buttons-action-module"] = (function(){
	var data = {
		active : function(){
			return $("#js-action-button");
		}
	}
	var init = function(){
		data.active().live("click", function(){
			worker($(this));
		});
	}
	var worker = function(object, s){
		s = s || function(){
			throw "Callback must be initialized";
		}
		var dataId = object.attr("data-id") || "0";
		var dataUrl = object.attr("data-url") || "1";
		var dataType = object.attr("data-type");
		$.ajax({
			type : "POST",
			url : dataUrl,
			data : {
				id : dataId
			},
			success : function(res){
				if(res == 0){
					if(dataType == "js-list"){
						timeout(object.parent().parent().parent().parent());
						object
						.parent().parent()
						.parent().removeClass("adv-line").addClass("pad-15-10")
						.parent().addClass("color-r-removed");
						object.hide();
						object.parent().parent()
						.html("<span class='bold font-size-12'>Удалено</span>");
					}
					else if(dataType == "js-table"){
						timeout(object.parent().parent());
						object
						.parent().parent().removeClass("adv-line").addClass("pad-15-10")
						.removeClass("hover-white").addClass("color-r-removed")
						object.hide();
					}
					else
						alert("Все прошло успешно!");
				}
				else{
					alert("Произошла ошибка, страница будет перезагружена!");
					document.location.reload();
				}
			}
		});
	}
	return {
		initialize : init,
		worker : worker
	}
	//extend
	function timeout(object){
		var time = 3000;
		var timer = setTimeout(function(){
			object.fadeOut("fast");
		}, time);
	}
});


modules["user-add-new-module"] = (function(){
	var T_NUMBER = 2;
	var init = function(){
		$("#js-user-add-part").live("click", function(){
			worker();
			$("#js-user-remove-part").show();
		});
		$("#js-user-remove-part").live("click", function(){
			if(T_NUMBER === 2)
				throw "THIS IS NOT GOOD!";
			T_NUMBER--;
			var st = "js-user-query-n[" + T_NUMBER + "]";
			var node = document.getElementById(st);
			$(node).remove();
			if(T_NUMBER === 2)
				$(this).hide();
		})
	}
	var worker = function(){
		var template = $("#js-user-query-template");
		var contentPlace = $("#js-user-query-content");
		var newPP = template.html().replace(new RegExp("{-NUMBER-}","g"), T_NUMBER);
		T_NUMBER += 1;
		contentPlace.append(newPP);
		//scroll need
		var scrollPr = $("#js-user-remove-part").offset().top;
		console.log(scrollPr)
		$(window).scrollTop(scrollPr);
	}
	return {
		initialize : init,
		worker : worker
	}
});

modules["about-site-tab-module"] = (function(){
	var data = {
		getMenu : function(){
			return $("#js-tab");
		},
		active : null
	}
	var init = function(){
		var mm = data.getMenu();
		mm.find("li").each(function(){
			if($(this).hasClass("active"))
				data.active = $(this)
		})
		mm.find("a").each(function(){
			$(this).bind("click", function(){
				worker($(this));
			});
		});
	}
	var worker = function(object){
		if(object.parent().hasClass("active"))
			return false;
		if(data.active){
			$("#js-tab-content-" + data.active.attr("data-target")).hide();
			data.active.removeClass("active");
		}
		data.active = object.parent().addClass("active");
		$("#js-tab-content-" + data.active.attr("data-target")).show();
		//second part
	}
	return{
		initialize : init,
		worker : worker
	}
});
//seller => modules
modules["seller-answer-module"] = (function(){
	var btn = {
		get : function(){
			return $(".js-seller-answer");
		},
		current : null
	}
	var place = {
		set : function(html){
			this.get().html(html);
		},
		get : function(){
			return $("#js-seller-place");
		},
		sendAjax : function(){
			$("#js-seller-give-answer").on("submit", function(){
				var data = $(this).serialize();
				var url = $(this).attr("data-url");
				//ajax caller
				$.ajax({
					url : url,
					data : data,
					type : "POST",
					success : function(res){
						var arr = "";
						var status = true;
						var bt = false;
						for(var i = 0; i < res.length; i++){
							if(res[i] == "0")
								arr += (i+1).toString() + " ";
							else if(res[i] == "1")
								bt = true;
							else
								status = false;
						}
						if(status && !bt){
							alert("Все прошло успешно!");
							removeAll();
						}
						else if(status == false){
							alert("Прозошла ошибка будет обнавлена страница!")
							document.location.reload();
						}
						else if(status && bt){
							alert("На запчасти по номеру " + arr + "не хватает баланса!");
							removePartial(arr);
						}
						else{
							alert("Прозошла ошибка будет обнавлена страница!")
							document.location.reload();
						}
					}
				});
				return false;
			});
		}
	}
	var init = function(){
		btn.get().each(function(){
			$(this).live("click", function(){
				btn.current = $(this);
				var cont = $(this).find("#answer-content");
				worker(cont);
			});
		});
		//bind ajax set!
		place.sendAjax();
	}
	var worker = function(content){
		place.set("");
		content.find(".hide").each(function(){
			place.get().append($(this).html());
		});
	}
	return {
		initialize : init,
		worker : worker
	}

	//private functions
	function removeAll(){
		if(btn.current){
			//remove the div from html!
			btn.current.parent().parent().parent().remove();
			$("#js-seller-answer-counter")
			.html(parseInt($("#js-seller-answer-counter").html())-1);
		}else{
			throw "Some error in code! Check it!";
		}
		//close modal
		T_SANDBOX.MODULES.modal.close();
	}
	function removePartial(arr){
		var dt = [];
		for(var i = 0; i < arr.length; i++){
			dt.push(
				btn.current.find(".hide").eq(i)
			);
		}
		for(var i = 0; i < dt.length; i++)
			dt[i].remove();
		//close modal
		T_SANDBOX.MODULES.modal.close();
	}
});

modules["seller-view-module"] = (function(){
	var btn_more = {
		get : function(){
			return $("#js-seller-answer-more");
		}
	}
	var init = function(){
		btn_more.get().live("click", function(){
			var those = $(this);
			var need = $(this).parent().parent().parent().parent().find("#js-s-more-view");
			if(need.hasClass("hide")){
				need.fadeIn("fast")
				.removeClass("hide");
				those.html(those.html().toString()
					.replace("Посмотреть ответы", "Скрыть ответы"));
			}
			else{
				need.fadeOut("fast")
				.addClass("hide");
				those.html(those.html().toString()
					.replace("Скрыть ответы", "Посмотреть ответы"));
			}
		});
	}
	var worker = function(){

	}
	return {
		initialize : init,
		worker : worker
	}
	//private
});

modules["js-user-query-form-module"] = (function(){
	var formName = {
		get : function(){
			return $("#js-user-query-form");
		}
	}
	var init = function(){
		formName.get().live("submit", function(){
			var data = $(this).serialize();
			var url = $(this).attr("action");
			//place for ajax
			$.ajax({
				url : url,
				type : "POST",
				data : data,
				success : function(res){
					if(res == "2"){
						alert("Введите правильный вин код!");
						return false;
					}
					var st = false;
					var mm = "";
					for(var i = 0; i < res.length; i++)
						if(res[i] == "1"){
							st = true;
							mm += (i+1);
							mm += " ";
						}
					if(st){
						alert("Возникли ошибки при подача запросов на части под номером" + mm);
					}else if(res.length > 0 && st == false){
						document.location.reload();
					}
					else
						alert("Error answer is null");
				}
			});
			return false;
		});
	}
	var worker = function(){

	}
	return {
		initialize : init,
		worker : worker
	}
});

modules["last-new-module"] = (function(){
	var data = {
		place : function(){
			return $("#js-news-load-place");
		}
	}
	var init = function(){
		getAjax();
	}
	var worker = function(){

	}
	return {
		initialize : init,
		worker : worker
	}
	//private functions

	function getAjax(){
		var url = path.base_url() + "index.php/news/get_news";
		var type = "POST";
		var place = data.place();
		$.ajax({
			url : url,
			type : type,
			data : {
				number : 10,
				city : "Алматы"
			},
			success : function(HTML_RESULT){
				place.html(HTML_RESULT);
			},
			error : function(errNumber){
				console.log(errNumber);
			}
		})
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
