
function loadPage(arg, itm)
{
	$(".menu-item").removeClass("active");
	$(itm).addClass("active");
	
	$("#m-con").html("<div class='ui placeholder'><div class='image'></div></div> Hello");
	$(".ui.placeholder").placeholder();
}


//jquery for my scrolling navbar

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
	document.getElementById("mynavbar").style.top = "0";
  } else {
	document.getElementById("mynavbar").style.top = "-155px";
  }
  prevScrollpos = currentScrollPos;
}

//javascript for the owl carousel
$(document).ready(function(){
	$('.resp-int').owlCarousel({
	rtl:true,
	autoplay : 5000,
	stopOnHover : false,
	loop:true,
margin:10,
responsiveClass:true,
responsive:{
	0:{
		items:1,
		// nav:true
	},
	600:{
		items:4,
		// nav:false,
		loop:true
	},
	1000:{
		items:4,
		// nav:true,
		loop:true
	}
}
})
$('#intro').owlCarousel({
rtl:true,
autoplay : 5000,
stopOnHover : false,
loop:true,
margin:10,
responsiveClass:true,
responsive:{
	0:{
		items:1,
		// nav:true
	},
	600:{
		items:3,
		// nav:false,
		loop:true
	},
	1000:{
		items:3,
		// nav:true,
		loop:true
	}
}
})
});



