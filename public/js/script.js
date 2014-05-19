
$(document).ready(function() {
	
	$(function(){
	    var c=0;
	    $(".button").click(function(){
	        $('.navbar').stop().animate({left: ++c%2*300 }, 'fast');
	    });  
	     $("#stripes").click(function(){
	        $('.navbar').stop().animate({left: ++c%2*300 }, 'fast');
	    }); 
	});


	$(function(){
	    var c=0;
	    $(".navbarRightClick").mouseover(function(){
	        $('.navbarRight').stop().animate({left: --c%2*300 }, 'fast');
	    });  
	     $("#stripes2").mouseover(function(){
	        $('.navbarRight').stop().animate({left: ++c%2*300 }, 'fast');
	    }); 
	});

		// $(function(){
	   
// 	   	$( ".button2" ).on( "mouseover", function() {
//   		$( '.navbarRight' ).css( "margin-right", "+=200px" );

//   			$( ".button2" ).on( "mouseout", function() {
//   		$( '.navbarRight' ).css( "margin-right", "-=200px" );
// 	});
//   });
// });

		
	    
	       
	  
	     


	  
      



	
	


});

