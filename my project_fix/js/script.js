jQuery(document).ready(function(){
	
	"use strict";
	
	/*** Are You Attending  ***/
	$(".map-fixed > span").click( function(){
	$(".map-fixed > .map-open").fadeToggle();
	});	
	
	/*** Are You Attending  ***/
	$("header.vertical-header nav > .open-menu").click( function(){
	$(this).parent().parent().parent().toggleClass('show animated bounceInLeft');
	});	
	
	
	$(".pictures-slide .nav-tabs > li").click( function(){
		$('.pictures-slide .nav-tabs > li').removeClass('active');
	});	
	
	
	/*** Are You Attending  ***/
	$(".simple-header .open-menu").click( function(){
	$(".simple-header .menu-sec nav > ul").slideToggle();
	});

	/*** FIXED Menu APPEARS ON SCROLL DOWN ***/	
	$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 50) {
	$("header").addClass("sticky");
	}
	else{
	$("header").removeClass("sticky");
	$("header").addClass("");
	}
	});

	$(function() {
	$('#toggle-widget .content').hide();
	$('#toggle-widget h2:first').addClass('active').next().slideDown('slow');
	$('#toggle-widget h2').click(function() {
	if($(this).next().is(':hidden')) {
	$('#toggle-widget h2').removeClass('active').next().slideUp('slow');
	$(this).toggleClass('active').next().slideDown('fast');
	}
	});
	});	 	
	
	$(function() {
	$('#toggle-book .content').hide();
	$('#toggle-book .tab-open:first').addClass('active').next().slideDown('slow');
	$('#toggle-book .tab-open').click(function() {
	if($(this).next().is(':hidden')) {
	$('#toggle-book .tab-open').removeClass('active').next().slideUp('slow');
	$(this).toggleClass('active').next().slideDown('fast');
	}
	});
	});	   
	
	
	/* Check width on page load*/
	if ( $(window).width() < 1170) {
	$('header').addClass('resize');
	}
	else {}

	$(window).resize(function() {
	/*If browser resized, check width again */
	if ($(window).width() < 1170) {
	$('header').addClass('resize');
	}
	else {
	$('header').removeClass('resize');
	}   

	});	
	
	/*** SMOOTH SCROLLING ***/	
	$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	if (target.length) {
	$('html,body').animate({
	scrollTop: target.offset().top
	}, 1000);
	}
	}
	});
	});    

	var lastId,
	topMenu = $("nav"),
	topMenuHeight = topMenu.outerHeight()+15,
	// All list items
	menuItems = topMenu.find("a"),
	scrollItems = menuItems.map(function(){
	var item = $($(this).attr("href"));
	if (item.length) { return item; }
	});
	$(window).scroll(function(){
	// Get container scroll position
	var fromTop = $(this).scrollTop()+topMenuHeight;

	// Get id of current scroll item
	var cur = scrollItems.map(function(){
	if ($(this).offset().top < fromTop)
	return this;
	});
	// Get the id of the current element
	cur = cur[cur.length-1];
	var id = cur && cur.length ? cur[0].id : "";

	if (lastId !== id) {
	lastId = id;
	// Set/remove active class
	menuItems
	.parent().removeClass("active")
	.end().filter("[href=#"+id+"]").parent().addClass("active");
	}                   
	});	
	
	$(".boxed-style").click( function(){
	$(".theme-layout").addClass("boxed");
	$("body").addClass('bg1');
	});

	$(".full-width").click( function(){
	$(".theme-layout").removeClass("boxed");
	$("body").removeClass('bg1');
	$("body").removeClass('bg2');
	$("body").removeClass('bg3');
	$("body").removeClass('bg4');
	$("body").removeClass('bg5');
	});

	$(".bg1").click( function(){
	$("body").addClass('bg1');
	$("body").removeClass('bg2');
	$("body").removeClass('bg3');
	$("body").removeClass('bg4');
	$("body").removeClass('bg5');
	});

	$(".bg2").click( function(){
	$("body").removeClass('bg1');
	$("body").addClass('bg2');
	$("body").removeClass('bg3');
	$("body").removeClass('bg4');
	$("body").removeClass('bg5');
	});

	$(".bg3").click( function(){
	$("body").removeClass('bg1');
	$("body").removeClass('bg2');
	$("body").addClass('bg3');
	$("body").removeClass('bg4');
	$("body").removeClass('bg5');
	});

	$(".bg4").click( function(){
	$("body").removeClass('bg1');
	$("body").removeClass('bg2');
	$("body").removeClass('bg3');
	$("body").addClass('bg4');
	$("body").removeClass('bg5');
	});

	$(".bg5").click( function(){
	$("body").removeClass('bg1');
	$("body").removeClass('bg2');
	$("body").removeClass('bg3');
	$("body").removeClass('bg4');
	$("body").addClass('bg5');
	});
	
	
});