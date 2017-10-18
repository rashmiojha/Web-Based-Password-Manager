$(document).ready(function()
{

	$("#btn1").click(function(){
		var active_li = $("#slider-ul li.active"); //li with class active and in the ul with id=slider-ul
		var next_li = (active_li.prev().length>0)?active_li.prev(): $("#slider-ul li:last");
		active_li.fadeOut(1000);
		next_li.fadeIn(1000);
		active_li.removeClass('active');
		next_li.addClass('active');
	});

	$("#btn2").click(function(){
		var active_li = $("#slider-ul li.active"); //li with class active and in the ul with id=slider-ul
		var next_li = (active_li.next().length>0)?active_li.next(): $("#slider-ul li:first");
		active_li.fadeOut(1000);
		next_li.fadeIn(1000);
		active_li.removeClass('active');
		next_li.addClass('active');
	});
	
});

// });

// var callable = function()
// {
// 	$("#btn").click(function(){
// 		alert("Hello");
// 	});
// }
// $(document).ready(callable);