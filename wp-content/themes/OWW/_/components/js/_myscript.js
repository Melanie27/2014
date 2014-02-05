

//Remove text from dynamically generated next and previous arrows

	$("a.prev").each(function(){
		var alteredString = $(this).text().replace(/« Previous/,"");
		$(this).text(alteredString);
	});
	$("a.next").each(function(){
		var alteredString = $(this).text().replace(/Next »/,"");
		$(this).text(alteredString);
	});

//Make featured images in post responsive

$('.wp-post-image').addClass('img-responsive');


$('.carousel').carousel({
  
  interval: false

});


/*Setting up the accordion images*/
$(".collapse").collapse();

$('.panel-title a').each(function() {
	
	var coll = $(this).attr('href');
	var button = $(this).next(".btn");
	$(coll).on('show.bs.collapse', function () {
		$(button).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
	});
	$(coll).on('hidden.bs.collapse', function () {
		$(button).css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
	});

});


/*MAIN Navigation*/

$('.current-menu-parent, .current-page-ancestor, .current-menu-ancestor' ).addClass('active');
$('.current-menu-ancestor' ).addClass('active');
$("#affiliations a:contains('Affiliations')").addClass('active');
$("#industry-affiliations a:contains('Affiliations')").addClass('active');


/*News Subnavigation*/
$("#press-releases a.side-nav:contains('Press Releases')").addClass('active');
$("#press-releases-single a.side-nav:contains('Press Releases')").addClass('active');
$("#in-the-news a.side-nav:contains('In the News')").addClass('active');
$("#in-the-news-single a.side-nav:contains('In the News')").addClass('active');
$("#award a.side-nav:contains('Awards & Honors')").addClass('active');
$("#awards-single a.side-nav:contains('Awards & Honors')").addClass('active');
$("#events a.side-nav:contains('Upcoming Events')").addClass('active');
$("#events-single a.side-nav:contains('Upcoming Events')").addClass('active');


if(window.location.href.indexOf("press_releases") > -1)   {
      
       $('#collapsePR.panel-collapse').addClass('in');
    }
    
else if(window.location.href.indexOf("in_the_news") > -1)   {
      
       $('#collapseITN.panel-collapse').addClass('in');
    }
    
   else if(window.location.href.indexOf("awards") > -1)   {
      
       $('#collapseAW.panel-collapse').addClass('in');
    }
    
     else if(window.location.href.indexOf("events") > -1)   {
      
       $('#collapseUE.panel-collapse').addClass('in');
    }     


/*Archive Navigation*/
var pathname = window.location.pathname;

 	if(window.location.href.indexOf("press_releases_tags/2011/") > -1){
        
        $('.press-releases-archive a.2011').addClass('active');
     }
     
     else if(window.location.href.indexOf("press_releases_tags/2012/") > -1) {
        
        $('.press-releases-archive a.2012').addClass('active');
     }
          
     else if(window.location.href.indexOf("press_releases_tags/2013/") > -1) {
        
        $('.press-releases-archive a.2013').addClass('active');
     }
          
     else if(window.location.href.indexOf("press_releases_tags/2014/") > -1) {
        
        $('.press-releases-archive a.2014').addClass('active');
     }
     
// In the News Archives

var pathnameNews = window.location.pathname;


 	if(window.location.href.indexOf("in_the_news_years/2011/") > -1) {
        
        $('.in-news-archive a.2011').addClass('active');
     }
     
  
     else if(window.location.href.indexOf("in_the_news_years/2012/") > -1){
        
        $('.in-news-archive a.2012').addClass('active');
     }
          
     else if(window.location.href.indexOf("in_the_news_years/2013/") > -1){
        
        $('.in-news-archive a.2013').addClass('active');
     }
     
          
     else if(window.location.href.indexOf("in_the_news_years/2014/") > -1){
        
        $('.in-news-archive a.2014').addClass('active');
     }
     

//Awards Archives 

 	if(window.location.href.indexOf("emmas") > -1)   {
      
       $('.EMMAs').addClass('active');
    }
    
    else if(window.location.href.indexOf("cartus-global-network") > -1) {
	    
	    $('.Cartus').addClass('active');
    }
    
     else if(window.location.href.indexOf("all") > -1 || window.location.href.indexOf("awards") > -1 ) {
	    
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


//Events Archive in News Navigation - highlight by selected month

if(window.location.href.indexOf("january") > -1)   {
      
       $('.January').addClass('active');
    } 
    
    else if (window.location.href.indexOf("february") > -1)   {
      
       $('.February').addClass('active');
    } 
    
    else if (window.location.href.indexOf("march") > -1)   {
      
       $('.March').addClass('active');
    } 

    
    else if(window.location.href.indexOf("april") > -1)   {
      
       $('.April').addClass('active');
    }
    
    else if(window.location.href.indexOf("may") > -1)   {
      
       $('.May').addClass('active');
    }
    
    else if(window.location.href.indexOf("june") > -1)   {
      
       $('.June').addClass('active');
    }
    
    else if(window.location.href.indexOf("july") > -1)   {
      
       $('.July').addClass('active');
    }
    
    else if(window.location.href.indexOf("august") > -1)   {
      
       $('.August').addClass('active');
    }
    
    else if(window.location.href.indexOf("september") > -1)   {
      
       $('.September').addClass('active');
    }
    
    else if(window.location.href.indexOf("october") > -1)   {
      
       $('.October').addClass('active');
    }
    
    else if(window.location.href.indexOf("november") > -1)   {
      
       $('.November').addClass('active');
    }
    
    else if(window.location.href.indexOf("december") > -1)   {
      
       $('.December').addClass('active');
    }

/*Scroll to Sections on Government Page*/
	
	$( '.searchbychar' ).on('click', function(event) {
    	event.preventDefault();
		var target = "#" + $(this).data('target');
    	var targetOffset = $(target).offset().top -170;
		$('html, body').animate({ scrollTop: targetOffset}, 1000);
           
	});


// deep linking the sections government page
  $(document).ready(function() {
    function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
    }
    var locationPath = filterPath(location.pathname);
    $('#government a[href*=#]').each(function() {
      var thisPath = filterPath(this.pathname) || locationPath;
      if (  locationPath == thisPath
      && (location.hostname == this.hostname || !this.hostname)
      && this.hash.replace(/#/,'') ) {
        var $target = $(this.hash), target = this.hash;
        if (target) {
          //var targetOffset = $target.offset().top;
          $(this).click(function(event) {
            event.preventDefault();
            //$('html, body').animate({scrollTop: targetOffset}, 400, function() {
              location.hash = target;
            //});
          });
        }
      }
    });
  });


if(window.location.href.indexOf("government") > -1)   {

	if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {          
            $('#government .sub-navigation').addClass("sub-move");
            
		} else {


			$(window).scroll(function() {
	
				var currentPosition = $(window).scrollTop(); //get current position
	
				if (currentPosition >= 10) {
		
					$('#government .sub-navigation').addClass("sub-move");
				}
	
				else {
		
					$('#government .sub-navigation').removeClass("sub-move");
				}
	
			});

		}


// Highlighting the subnav items while scrolling - alternative code for the iPad


	$(window).scroll(function () {

    	if ($(window).scrollTop() + $(window).height() > $('#A').offset().top && ($(window).scrollTop() + $(window).height() < $('#B').offset().top)) {
        
        	$('#overview1 a').addClass("active");
			$('#military1 a, #federal-civilian1 a, #government-contractors1 a, #gsa1 a').removeClass("active");
        
			} else {
				
				$('#overview1 a').removeClass("active");
       
			}
		});


		$(window).scroll(function () {

			if ($(window).scrollTop() + $(window).height() > $('#B').offset().top && ($(window).scrollTop() + $(window).height() < $('#C').offset().top)) {
        
				$('#military1 a').addClass("active");
				$('#overview1 a, #federal-civilian1 a, #government-contractors1 a, #gsa1 a').removeClass("active");
        
        
			} else {
				
				$('#military1 a').removeClass("active");
       
			}
		});


		$(window).scroll(function () {

			if ($(window).scrollTop() + $(window).height() > $('#C').offset().top && ($(window).scrollTop() + $(window).height() < $('#D').offset().top)) {
        
				$('#federal-civilian1 a').addClass("active");
				$('#overview1 a, #military1 a, #government-contractors1 a, #gsa1 a').removeClass("active");
       
				} else {
					
					$('#federal-civilian1 a').removeClass("active");
				
				}
			});

		$(window).scroll(function () {

			if ($(window).scrollTop() + $(window).height() > $('#D').offset().top && ($(window).scrollTop() + $(window).height() < $('#E').offset().top)) {
        
				$('#government-contractors1 a').addClass("active");
				$('#overview1 a, #military1 a, #federal-civilian1 a, #gsa1 a').removeClass("active");
        
				} else {
       
					$('#government-contractors1 a').removeClass("active");
				
				}
			});

		$(window).scroll(function () {

			if ($(window).scrollTop() + $(window).height() > $('#E').offset().top) {
        
				$('#gsa1 a').addClass("active");
				$('#overview1 a, #military1 a, #government-contractors1 a, #federal-civilian1 a').removeClass("active");
        
			} else {
       
				$('#gsa1 a').removeClass("active");
				
			}
		});

}
