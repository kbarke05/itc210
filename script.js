$(document).ready(function(){ 
 	var trigger = $(".trigger a"); 
 	var menu = $(".mini-navigation"); 
 	trigger.on('click', function(){ 
 		var html = $(".navigation.responsive").html(); 
 		menu.html(html).toggle(0, function(){ 
 			if($(this).is(":visible")){ 
 				trigger.html('Hide Menu'); 
 			}else{ 
 				trigger.html('Show Menu'); 
 			} 
 			$('.mini-navigation li.trigger').remove(); 
 		}); 
 	}); 
 	$(window).resize(function(){ 
 		menu.hide(); 
 		trigger.html('Show Menu'); 
 	}); 
 }) 
