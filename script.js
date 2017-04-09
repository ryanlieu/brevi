// JavaScript Document

jQuery(document).ready(function($) {
	
	var allowed_sites = ['http://gizmodo.com'];
	
	$('a').each(function() {
	   var href = this.href;
	   pathArray = href.split( '/' );
	   protocol = pathArray[0];
	   host = pathArray[2];
	   url = protocol + '//' + host;
	   /*if($.inArray(url, allowed_sites) !== -1) {*/
	   if(href.length > url.length + 3) {
	       Tipped.create(this, "http://newslyapp.herokuapp.com/summarize/4/http://www.politico.com/story/2017/03/chuck-schumer-delay-neil-gorsuch-vote-236315/", {
			   ajax: { data: {href: href}, type: 'post' },
			   skin: "white",
		       hook: 'rightmiddle',
			   maxWidth: 430,
			   stem: { spacing: 35 },
			   spinner: { 
				   radius: 7,
				   height: 1,
				   width: 2.5,
				   dashes: 30,
				   opacity: 1,
				   padding: 10,
				   rotation: 700,
				   color: '#000000'
			   },
		   });
   	    }
	});   
	$("#tryme").click(function() {
    $('html, body').animate({
        scrollTop: $("#tryitout").offset().top
    }, 500);
});
});

