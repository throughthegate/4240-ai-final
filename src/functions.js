/*
Change link so that it displays a message before it goes to a page
*/

//$(document).ready(function(){
$('.message-link').click(function(){  
	// Get the url of the link  
	var toLoad = $(this).attr('href');  

		// Do some stuff  
		$(this).animate({  
			marginRight: '50px',  
			marginLeft: '-175px'  
		}, 300, 'easeOutSine').animate({  
			marginRight: '-38px',  
			marginLeft: '-120px'  
		}, 500, 'easeOutBounce');  
		// Stop doing stuff  

	// Wait 700ms before loading the url  
	$(this).delay(700, function(){  
		window.location = toLoad;  
	});  

	// Don't let the link do its natural thing  
	return false;  
});  
//});
