$(document).ready(function(){

$("#quick-add-button").click(function(){
var name = $("#title").val();
var contnet = $("#contnet").val();

$.get("action.php" , {varname:name, varcontent:contnet } , function(feedback)

{

$(".msg").html(feedback);
	
})



})



})