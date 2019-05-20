
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



function fileSeleted()
{
	let files = document.getElementById("file-upload").files;

	let name = files[0].name;

	$("#file-btn").removeClass("btn-primary");
	$("#file-btn").addClass("btn-success");

	$("#upload-data").html(name + " added <span style='color: blue; cursor: pointer;' onclick='removeFile()'>Remove</span>");
}


function removeFile()
{
	$("#upload-data").html("");
	document.getElementById("file-upload").files= null;
	$("#file-btn").addClass("btn-primary");
	$("#file-btn").removeClass("btn-success");
}

