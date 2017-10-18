var hidall = function()
{
	
	$("#jaldi").hide();
	$("#pop-upbox").hide();
	// $(".click").hide();
}
 var callable = function()
 {
 	$("#clicked").click(hidall);
 }

 $(document).ready(callable);
