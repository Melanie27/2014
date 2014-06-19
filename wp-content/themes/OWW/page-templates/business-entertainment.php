<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Business Entertainment
 
 */

get_header(5); ?>

<body id="entertainment">
  	<div class="container-full">
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Entertainment</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php /*include (TEMPLATEPATH . '/_/components/php/hero-government.php');*/ ?>
		  	</section> <!--two-->	
			<hr />
			<div class="container">
				<?php include (TEMPLATEPATH . '/_/components/php/extended-stay-lodging.php'); ?>
			</div><!--end container-->		
			<hr />
			<section class="row hidden-sm hidden-xs">
				<div class="col-lg-12">
					<section class="four">
					</section>
				</div>
			</section><!--content 4-->
			
			<!--
			<section class="container three">	
				<div class="row ">
					<section class="col-lg-12 col-md-12 col-xs-12">
						<div class="row">
							<section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 entertainment-intro child-actors">
								<h2>Child Actors Program</h2>
								<h3>Each year many children and their parents come to Hollywood from all over the world to work in television, film, music and theatre. Oakwood Toluca Hills is the ideal apartment community for all aspiring stars.</h3>
								<section class="col-lg-8 col-lg-offset-2 col-xs-12">
									<div class="row archives">
										<section class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
											<a class="link-archives see-all text-center" href="upcoming-events.php">Learn More</a>
										</section>
									</div>
								</section><!--end button-->
							<!-- </section><!--end child actors-->
							<!--<hr class="hidden-lg hidden-md">
							<section class="col-lg-6 col-md-6 entertainment-intro filming">
								<h2>Filming At Oakwood Worldwide</h2>
								<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et augue tempus magna elementum pharetra. Aenean nisi nibh, sollicitudin eget facilisis blandit, dignissim sed tortor. Etiam at volutpat sem. Sed augue.</h3>
								<section class="col-lg-8 col-lg-offset-2">
									<div class="row archives">
										<section class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
											<a class="link-archives see-all text-center" href="upcoming-events.php">Learn More</a>
										</section>
									</div>
								</section><!--end button-->
							<!-- </section><!--end film-->
						<!-- </div><!--end nested row-->
					<!-- </section>
				</div>
			</section> <!--end three-->
			<hr />			
			<section class="container five">
				<div class="row">			
					<section class="tab-section">
						<h2>Why Does The Entertainment Industry Prefer Oakwood Worldwide?</h2>
						<ul>
							<li>Our corporate and serviced apartments are far more spacious than the typical hotel room, with separate living, sleeping and dining spaces and full-size kitchens</li>
							<li>We offer fitness centers, swimming pools, laundry facilities, Wi-Fi and other amenities in most locations for added convenience</li>
							<li>Our dedicated specialists have the speed and experience to address issues and solve problems 24/7/365</li>
							<li>We have over 50 years experience serving the entertainment industry</li>
							<li>We offer the broadest range of accommodations with flexible pricing to meet most production budgets</li>
							<li>We have convenient locations near film and television studios, theaters, etc.</li>
							<li>We offer personalized strategies for cost containment, such as group housing solutions, consolidated invoicing and flexible billing</li>
						</ul>
					</section>	
				</div><!--end tabbed section-->
			</section>
			<hr class="hidden-lg" />
			<div class="row industry-insights">
				<section class="col-sm-12 hidden-lg hidden-md">
					<div class="container">
						<h2>Industry Insights</h2>
					</div>
					<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
				</section>
			</div>
			<hr />
			<section class="row hidden-sm">
				<div class="col-lg-12 hidden-xs">
					<section class="six">
					</section>
				</div>
			</section><!--content 6-->	
			<hr class="hidden-xs hidden-sm">


<?php get_footer(); ?>