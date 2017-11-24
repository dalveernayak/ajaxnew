$(document).ready(function()
{
	$("#quick-add-button").click(function(){
	var title = $("#title").val();
	var contnet = $("#contnet").val();	
	$.post("action.php",{tit:title,cont:contnet}, function(status){
	//alert(status);
	$(".msg").html(status);
	
})
		
	})
})

////test


