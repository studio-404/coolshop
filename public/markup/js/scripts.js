$(document).ready(function(){
	var h = $(document).height();
	$(".banner").css("min-height", h+"px");


	//slider
	var slide_images = new Array();
	var all_images = $(".cover-images").length;
	var active_image = 1;
	setInterval(function(){
		if(active_image==all_images){
			active_image=1;
		}else{
			active_image++;
		}
		var image = $("#s"+active_image).val();

		$('.banner').fadeTo('slow', 0.5, function()
		{
		    $(this).css('background-image', 'url(' + image + ')');
		}).fadeTo('slow', 1);

		console.log(active_image);
	},5000);
});