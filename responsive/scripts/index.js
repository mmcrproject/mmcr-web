$(document).ready(function(){
	//Prepare the default view of the page
	showDefaultDivs();
	//Handle user interaction
	handleClicks();
});

function showDefaultDivs(){
	//Show Adopt content, show Adopt selector as .clicked
	//Class .clicked is modified by CSS
	$("#contentSelectorAdoptContent").show();
	$("#adoptSelector").addClass("clicked");
}

function handleClicks(){

	$("#navbarLinks span").on("click", function () {
	//IF != learn, learn needs a different action
	
		var navdiv = $(this).html().replace(/ /g,'');
		console.log(navdiv);
		//Highlight correct selector, show content
		$(".contentSelector").removeClass("clicked");
		$("#"+navdiv.toLowerCase()+"Selector").addClass("clicked");
		$(".contentSelectorContent").hide();
		$("#contentSelector"+navdiv+"Content").show();
		$(window).scrollTop($("#"+navdiv.toLowerCase()+"Selector").offset().top);
		return false;
	});
	
	//When a content selector is clicked, add class .clicked
	//Class .clicked is modified by CSS
	$(".contentSelector").on("click", function () {
		$(".contentSelector").removeClass("clicked");
		$(this).addClass("clicked");
		var contentdiv = $(this).children("span").html().replace(/ /g,'');
		$(".contentSelectorContent").hide();
		$("#contentSelector"+contentdiv+"Content").show();
	});
}