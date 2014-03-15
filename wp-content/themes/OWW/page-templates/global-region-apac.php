<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Global Region APAC
 
 */

get_header(3); ?>
<body id="united-states-canada">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two apac">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1><?php the_title(); ?></h1>										
							</div>
						</section>		
					</div><!--heading-->		
					
		  		</section> <!--two container-->	
		  		<section class="three container">
					<div class="row intro-regional">
						<section class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
							<h1>Headline Highlighting a Figure About Oakwood Worldwide's Reach in This Area</h1>
							<h2>You'll find us in major cities and rural areas throughout the 50 US states and Canada. This is placeholder text.</h2>
							<p>This is placeholder body copy. Only Oakwood Worldwide can provide housing in more than 25,000 locations worldwide-throughout North America, Europe, the Middle East, Africa, and Latin America - all located within or nearby major metropolitan areas, centers of business and other points of interest.</p>
							<ul>
								<li> A presence in all 50 United States</li>
								<li> Top four markets are L.A., D.C., N.Y. and Chicago</li>
								<li> WSSC in Phoenix, Arizona</li>
								<li> Nine Oakwood buildings and 7 co-branded Oakwood and ExecuStay buildings in the United States</li>
								<li> Latin American locations in Argentina, Brazil, Chile, Costa Rica, Mexico, Peru and Venezuela</li>
							</ul>
						</section>
					</div>
				</section><!--end three-->
				<hr />
				<section class="five container">
					<div class="row carousel-heading">
						<section class="col-lg-12 col-md-12">
							<h2>Search Popular <?php the_title(); ?> Destinations</h2>
								<ul class="hidden-lg hidden-md destinations">
									<li>Washington, D.C.</li>
									<li>Tampa, FL</li>
									<li>Charleston, SC</li>
									<li>New York, NY</li>
									<li>Washington, D.C.</li>
									<li>Tampa, FL</li>
									<li>Charleston, SC</li>
									<li>New York, NY</li>
								</ul>
								<?php include (TEMPLATEPATH . '/_/components/php/carousel-apac.php'); ?>
						</section>
					</div>
				</section><!--end five-->			
				<hr />
				<section class="seven container">
					<div class="row global-destinations">
						<section class="col-lg-12 col-md-12 global-intro">
							<h1>Explore Oakwood Worldwide's Other Global Destinations and Services</h1>
						</section>
						<?php include (TEMPLATEPATH . '/_/components/php/global-destinations.php'); ?>
					</div>
				</section><!--seven-->		
				<hr />	
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>