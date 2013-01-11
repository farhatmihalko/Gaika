$(document).ready(function(){
	app.init();
});

var app = {}

app.init = (function(){
	for(var i in app){
		if(
		   i.toString() != "init"
		)
			app[i]();
	}
});

app["add-money-view"] = (function(){
	function get(){
		return $("#js-add-money-open");
	}
	get().live("click", function(){
		$(this).hide()
		.parent().find("#js-add-money-form")
		.fadeIn("fast");
	});
});


var OPENED_TAB = [];
app["change-tab"] = (function(object){
	$("#js-admin-users").live("click", function(){
		$("#js-admin-sellers").parent().removeClass("active");
		$(this).parent().addClass("active");
		$("#js-admin-view-users").show();
		$("#js-admin-view-sellers").hide();
	});
	$("#js-admin-sellers").live("click", function(){
		$("#js-admin-users").parent().removeClass("active");
		$(this).parent().addClass("active");
		$("#js-admin-view-users").hide();
		$("#js-admin-view-sellers").show();
	});
});
