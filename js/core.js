var v8 = (function(){
	//this is core definition
	var modules = {}

	var registrate = function(moduleName, moduleObject){
		if(moduleName && moduleObject){
			if(checkModuleForCompability(moduleObject))
				modules[moduleName] = moduleObject;
			else
				throw "module is not like a recommendet fix it!";
		}else{
			throw "The inputs is not correct or object are not created";
		}
	}

	var initialize = function(moduleName){
		if(modules[moduleName]){
			modules[moduleName].initialize();
		}else{
			throw "Module is not defined!";
		}
	}

	var initializeAll = function(){
		for(var i in modules){
			initialize(i);
		}
	}

	var print = function(){
		printModules(modules);
	}

	return {
		registrate : registrate,
		initializeAll : initializeAll,
		initialize : initialize,
		printModules : print
	}

	//private functions 
	function checkModuleForCompability(moduleObject){
		if(moduleObject.initialize && moduleObject.worker)
			return true;
		else
			return false;
	}
	function printModules(modules){
		if(modules){
			var _counter = 0;
			for(var i in modules){
				_counter++;
				if(window.console){
					console.log(_counter + ' => ' + i);
				}
				else
					alert(_counter + ' => ' + i);
			}
		}
	}
});

//creation core
self.core = v8();
v8 = null;
//end of creation

$(document).ready(function(){
	$("#drop-down-open").DropDown();
	$(".header-city").find("li").each(function(){
		$(this).live("click", function(){
			$("#js-city-text").text($(this).text());
			$(this).parent().parent().removeClass("open")
			return false;
		})
	});
});
