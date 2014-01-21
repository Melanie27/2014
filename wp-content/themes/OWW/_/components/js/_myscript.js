//Make featured images in post responsive

$('.wp-post-image').addClass('img-responsive');


$('.carousel').carousel({
  interval: false
});

$(".collapse").collapse();

$('#collapseOne').on('show.bs.collapse', function () {
	$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseOne').on('hidden.bs.collapse', function () {
	$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseTwo').on('show.bs.collapse', function () {
	$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseTwo').on('hidden.bs.collapse', function () {
	$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseThree').on('show.bs.collapse', function () {
	$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseThree').on('hidden.bs.collapse', function () {
	$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseFour').on('show.bs.collapse', function () {
	$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFour').on('hidden.bs.collapse', function () {
	$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('#collapseFive').on('show.bs.collapse', function () {
	$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFive').on('hidden.bs.collapse', function () {
	$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});


$('.panel-heading-business a ').each(function (index) {
			
	var hashCol = $(this).attr('href');
	var grandParent = $(this).parent().parent().attr('id');
	var gString = $('.' + grandParent);
	var btn = $(this).find("button");
	var btnID = $(btn).attr("id");
	var subString2 = btnID.substring(0, 3);	
	btnString = $('.' + subString2);
	btnIDString = $('#' + btnID);
	var panelTitle  = $(this).parent().attr('class');
	titleSub = panelTitle.substring(0, 6);
	titleString = $('.' + titleSub);
									
	/*Add and remove the bottom border from the header when collapsing and expanding the accordion*/
			
	$(hashCol).on('show.bs.collapse', function () {
				
		//$(gString).css("border-bottom", "none");
		/*$(btnIDString).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");*/				
			
	});
		
		
	$(hashCol).on('hidden.bs.collapse', function () {
				
		//$(gString).css("border-bottom", "solid 1px #ebebeb");
		/*$(btnIDString).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");*/
						
	});


});



/*MAIN Navigation*/

$('.current-menu-parent, .current-page-ancestor, .current-menu-ancestor' ).addClass('active');

$('.current-menu-ancestor' ).addClass('active');
/*News Subnavigation*/
$("#press-releases a:contains('Press Releases')").addClass('active');

$("#press-releases-single a:contains('Press Releases')").addClass('active');
$("#in-the-news a:contains('In the News')").addClass('active');
$("#in-the-news-single a:contains('In the News')").addClass('active');
$("#award a:contains('Awards & Honors')").addClass('active');
$("#awards-single a:contains('Awards & Honors')").addClass('active');
$("#events a:contains('Upcoming Events')").addClass('active');
$("#events-single a:contains('Upcoming Events')").addClass('active');


/*Archive Navigation*/
var pathname = window.location.pathname;

 	if(pathname == '/2014/press_releases_tags/2011/' ){
        
        $('.press-releases-archive a.2011').addClass('active');
     }
     
     
     else if(pathname == '/2014/press_releases_tags/2012/' ){
        
        $('.press-releases-archive a.2012').addClass('active');
     }
          
     else if(pathname == '/2014/press_releases_tags/2013/' ){
        
        $('.press-releases-archive a.2013').addClass('active');
     }
          
     else if(pathname == '/2014/press_releases_tags/2014/' ){
        
        $('.press-releases-archive a.2014').addClass('active');
     }
     
     
     
     
// In the News Archives

var pathnameNews = window.location.pathname;


 	if(pathnameNews == '/2014/in_the_news_years/2011/' ){
        
        $('.in-news-archive a.2011').addClass('active');
     }
     
  
     
     else if(pathnameNews == '/2014/in_the_news_years/2012/' ){
        
        $('.in-news-archive a.2012').addClass('active');
     }
     
          
     else if(pathnameNews == '/2014/in_the_news_years/2013/' ){
        
        $('.in-news-archive a.2013').addClass('active');
     }
     
          
     else if(pathnameNews == '/2014/in_the_news_years/2014/' ){
        
        $('.in-news-archive a.2014').addClass('active');
     }
     


//Awards Archives 

 	if(window.location.href.indexOf("emmas") > -1) {
      
       $('.EMMAs').addClass('active');
    }
    
    else if(window.location.href.indexOf("cartus-global-network") > -1) {
	    
	    $('.Cartus').addClass('active');
    }
    
     else if(window.location.href.indexOf("all") > -1) {
	    
	    $('.All').addClass('active');
    }


if ( $("#industry-insights-government a:contains('Business Solutions')") ) {
	
	$('.solutions-industry #government').addClass('active');
	$('.solutions-industry #relocation').removeClass('active');
} 

if ( $("#industry-insights-relocation a:contains('Business Solutions')") ) {
	
	$('.solutions-industry #relocation').addClass('active');
	$('.solutions-industry #government').removeClass('active');
}

/*Scroll to Sections on Government Page*/
	
	$('#overview1').click(function() {
		$(window).scrollTop(445);
		$('.sub-navigation').addClass("sub-move");
		$('#government-contractors1, #military1, #federal-civilian1, #gsa1').removeClass("active");
		$('#overview1').addClass("active");
	});
	
	$('#military1').click(function() {
		$(window).scrollTop(2000);
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #government-contractors1, #federal-civilian1, #gsa1').removeClass("active");
		$('#military1').addClass("active");
	});
	
	$('#federal-civilian1').click(function() {
		$(window).scrollTop(3250);
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #military1, #government-contractors1, #gsa1').removeClass("active"); 
		$('#federal-civilian1').addClass("active");
	});
	
	$('#government-contractors1').click(function() {
		$(window).scrollTop(4000);
		$('.sub-navigation').addClass("sub-move");
		$('#government-contractors1').addClass("active");
		$('#military1, #overview1, #federal-civilian1, #gsa1').removeClass("active");
				
	});
	
	$('#gsa1').click(function() {
		$(window).scrollTop(4720);	 
		$('.sub-navigation').addClass("sub-move");
		$('#overview1, #military1, #federal-civilian1, #government-contractors1').removeClass("active");	 
		$('#gsa1').addClass("active"); 
	});
	


/*Make the subnavigation fixed on govt page*/

$(window).scroll(function() {
	
	var currentPosition = $(window).scrollTop(); //get current position
	
	if (currentPosition >= 513) {
		
		$('#government .sub-navigation').addClass("sub-move");
	}
	
	else {
		
		$('#government .sub-navigation').removeClass("sub-move");
	}
	
});
