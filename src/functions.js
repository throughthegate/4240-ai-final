/*
Change link so that it displays a message before it goes to a page
*/
$(document).ready(function(){
	$('.message-link').click(function(e){  
		//don't let the link to its natural thing
		e.preventDefault();
		
		// Get the url of the link  
		var toLoad = $(this).attr('href');  
		var message = $(this).attr('data-msg');  
		var time = $(this).attr('data-time'); 
		//if no user specified time, default is 1500ms
		if (!time){
			time = 1500;
		}
		//specify a slideDown time and a slideUp time
		var timeDown = 400;
		var timeUp = 400
		//if you need to display a load screen
		var loadScreen = $(this).attr('data-load'); 

		//show the message 
		//first hide the bar, then reset its css
		$('#notification-bar').hide().css({display: 'block'})
		$('#notification-message').append(message);
		//slide down, slide up, then load href
		$('#notification-bar').hide();
		if(!loadScreen){
			$('#notification-bar').slideDown(timeDown).delay(time).slideUp(timeUp).delay(100, function(){  
				window.location = toLoad;  
			});  
		}
		//show a loadscreen if necessary
		if(loadScreen){
			$('#load-screen').css({display: 'block'}).hide();
			$('#notification-bar, #load-screen').slideDown(timeDown).delay(time);
			$('#notification-bar').slideUp(timeUp).delay(100, function(){  
				window.location = toLoad;  
			}); 
		}
		

	}); 
});

/*Show message after a page has loaded */
$(document).ready(function(){
		
	//get the message
	var message = $('#notification-info').attr('data-msg');
	console.log("message is " + message);
	var time = $(this).attr('data-time'); 
	//if no user specified time, default is 1500ms
	if (!time){
		time = 1500;
	}
	//specify a slideDown time and a slideUp time
	var timeDown = 400;
	var timeUp = 400
	//if you need to display a load screen
	var loadScreen = $(this).attr('data-load'); 

	//show the message 
	if(message){
		//first hide the bar, then reset its css
		$('#notification-bar').hide().css({display: 'block'})
		$('#notification-message').append(message);
		//slide down, slide up, then load href
		$('#notification-bar').hide();
		if(!loadScreen){
			$('#notification-bar').slideDown(timeDown).delay(time).slideUp(timeUp);  
		}
		//show a loadscreen if necessary
		if(loadScreen){
			$('#load-screen').css({display: 'block'}).hide();
			$('#notification-bar, #load-screen').slideDown(timeDown).delay(time);
			$('#notification-bar').slideUp(timeUp);
		}
	}
}); 
/* Show a load screen */
$(document).ready(function(){
	$('.trigger-load').click(function(e){  
		//don't let the link to its natural thing
		e.preventDefault();
		
		// Get the url of the link  
		var toLoad = $(this).attr('href');  
		var message = $(this).attr('data-load');  
		if (!message){
			message = "Loading...";
		}
		var time = $(this).attr('data-time'); 
		//if no user specified time, default is 1500ms
		if (!time){
			time = 1500;
		}
		//specify a slideDown time and a slideUp time
		var timeDown = 400;
		var timeUp = 400

		$('#load-message').html(message);
		$('#load-screen').css({display: 'block'}).hide();
		$('#load-screen').slideDown(timeDown).delay(time).delay(100, function(){  
			window.location = toLoad;  
		});		

	}); 
});
/* 
Play/pause the video
*/
var myVideo=document.getElementById("alarmAudio"); 

function playPause()
{ 
if (myVideo.paused) 
  myVideo.play(); 
else 
  myVideo.pause(); 
} 


/*
Enlarge the app when you load it
*/
$(function() {
  $('.enlarge').css({ height: '50px', width: '50' });
  $('.enlarge').animate({ height: '480px', width: '320px' }, 600, 'linear');
});


