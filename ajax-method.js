$(document).ready(function()
{  $("#quick-add-button").click(function(){
	var title = $("#title").val();
	var contnet = $("#contnet").val();
	
	$.ajax({
		type : 'POST',
		url : 'action.php',
		data : {title:title},
		success : function(data)
		{
		$('.msg').html(data);	
		}
		})
	})
})

////test


