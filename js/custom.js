// // $(document).ready(function(){

// // alert("hello");
// // $("#btn").click(function(){

// // 	alert("Hello");
// // });

// // });

// // var callable = function()
// // {
// // 	$("#btn").click(function(){
// // 		alert("Hello");
// // 	});
// // }
// // $(document).ready(callable);

// // var btnclick = function(){
// // 	// alert($("#user-name").val());
// // 	$("#content").html("Hi");
// // }

// // var callable = function(){
// // 	$("#btn").click(btnclick);
// // }

// // $(document).ready(callable);

// // var updatetxt = function()
// // {
// // 	console.log('working');
// // }
// //  var callable = function()
// //  {
// //  	$("#dropdown").change(updatetxt);
// //  }

// //  $(document).ready(callable);

// // var btnclick=function()
// // {
// // 	$("#content").html("Registered");
// // }
// var callable=function(){
// 	$(".dropdown").change(callable1);
//   }
// var callable1=function()
// {
// 	var val = $(".dropdown").find('option:selected').val();
// 	console.log(val);
// }
// // var updatetext=function()
// // {
// // 	alert($(".ip").val());
// // }
// $(document).ready(callable);
// var callable = function(){
// 	$("#btn").click(change);
// }
// var change = function(){
// 	$('#para').css({'color':'#0FF','font-size':'30px'});
// }
//  $(document).ready(callable);

// var callable = function(){
// 	$("#btn").click(change);
// }

// var change = function(){
// 	$('.ip').attr('placeholder','name');
// }
//  $(document).ready(callable);

//  var callable = function(){
// 	$("#btn").click(change);
// }

// var change = function(){
// 	$('#hide').hide();
// }
//  $(document).ready(callable);
//  var callable = function(){
// 	$("#click").click(change);
// }

// var change = function(){
// 	$('#para').slideToggle(1000);
// }
//  $(document).ready(callable);

 var callable = function(){
	$(".btnpara").click(change);
}

var change = function(){
	// console.log($(this).attr('data-id'));
	var data_id = $(this).attr('data-id');
	$("#para-container p.active").removeClass('active');
	$("#"+data_id).addClass('active');
}
 $(document).ready(callable);