var charLimit = 0;

$(window).resize(function(){

    if ($(window).width() <= 600) {  
        charLimit = 15;
    }   
    
    else if($(window).width() >= 600){
        charLimit = 15;

    }

    else if($(window).width() >= 768){
        charLimit = 20;

    }   

    else if($(window).width() >= 992){
        charLimit = 20;

    }

    else if($(window).width() >= 1200){
        charLimit = 20;
    }

});


// Creating a cookie after the document is ready 
$(document).ready(function (charLimit = 20) { 
	createCookie("charlimit", charLimit, "10"); 
}); 

// Function to create the cookie 
function createCookie(name, value, days) { 
	var expires; 
	
	if (days) { 
		var date = new Date(); 
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
		expires = "; expires=" + date.toGMTString(); 
	} 
	else { 
		expires = ""; 
	} 
	
	document.cookie = escape(name) + "=" + 
		escape(value) + expires + "; path=/"; 
} 

