<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Business Traveler
 
 */

get_header(4); ?>

<body id="relocation">
  	<div class="container-full">
  		<section class="container landing">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
			<div class="row heading">
				<section class="col-lg-12">
					<div class="container">
						<h1>Business Solutions: <span class="entry-title"><?php the_title(); ?></span></h1>
					</div>
				</section>		
			</div><!--heading-->
			<?php include (TEMPLATEPATH . '/_/components/php/hero-government.php'); ?>	
		 </section> <!--two-->	
		<section class="three container overview relocation" id="overview">
			<div class="row over2">
				<section class="col-lg-12 col-md-12 container">
					<div class="row overview-top">
						<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
							<h1>Extended Stay Lodging for the Relocating Professionals</h1>
							<h2>For over 50 years, Oakwood Worldwide has given those who serve America a place they could call home.</h2>
							<p>As the first, largest and leading provider of extended stay lodging (ESL) solutions to the federal government, Oakwood offers a welcoming environment for government employees, with convenient locations, and access to various transportation options.</p>
							<a href="<?php bloginfo('url'); ?>/business-solutions/individual-business-traveler/individual-business-traveler-single/" class="orange-link">Learn More &#8594;</a>
						</section><!--end two thirds-->			
					</div><!--end nested row-->
				</section><!--container-->
			</div><!--end row-->
		</section><!--three-->									
		<hr />								
		<section class="three three-a container overview">
			<div class="row over2">										
				<section class="col-lg-12 col-md-12">						
					<div class="row">
						<section class="tab-section">
							<h1>Why do Relocating Professionals Prefer Oakwood?</h1>					
							<?php include (TEMPLATEPATH . '/_/components/php/tabs-mobile.php'); ?>						
							<?php include (TEMPLATEPATH . '/_/components/php/industry-tabs.php'); ?>
						</section>
					</div><!--end tabbed section-->
				</section>
			</div><!--row-->
		</section><!--three overview-->	
		<hr class="hidden-lg hidden-md" />			
		<div class="row industry-insights">
			<section class="col-sm-12 hidden-lg hidden-md">
				<div class="container">
					<h1>Industry Insights</h1>
				</div>
				<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
			</section>
		</div>	
		<hr />
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>