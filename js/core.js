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

var q8 = (function(){
	
	var T_OBJECT = {
		//store modules
		print : function(){
			if(window.console)
				console.log("Hi this is sandbox");
			else
				alert("Hi this is sandbox");
		},
		addModule : addModule,
		removeModule : removeModule,
		//here we store modules
		MODULES : {
			//modules definition
		}
	}

	return T_OBJECT;

	//private functions
	function addModule(T_NAME, module){
		if(module && T_NAME)
			T_OBJECT.MODULES[T_NAME] = module;
	}
	function removeModule(T_NAME){
		if(T_OBJECT.MODULES[T_NAME]){
			T_OBJECT.MODULES[T_NAME] = null;
		}
	}
});
//creation core
self.core = v8();
v8 = null;
//end of creation

//adding sandbox
self.T_SANDBOX = q8();
q8 = null;
//end of sandbox

$(document).ready(function(){
	$("#drop-down-open").DropDown();
	$(".header-city").find("li").each(function(){
		$(this).live("click", function(){
			$("#js-city-text").text($(this).text());
			$(this).parent().parent().removeClass("open")
			return false;
		})
	});
	
	uiGarbase();
});

function uiGarbase(){

	$("#js-user-table").bind("click", function(){
		$(this).addClass("a_type_cat");
		$("#js-user-list").removeClass("a_type_cat");
		$("#js-user-type-list").hide();
		$("#js-user-type-table").fadeIn("fast");
	});
	$("#js-user-list").bind("click", function(){
		$(this).addClass("a_type_cat");
		$("#js-user-table").removeClass("a_type_cat");
		$("#js-user-type-table").hide();
		$("#js-user-type-list").fadeIn("fast");
	});
}