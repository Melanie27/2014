<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Business Government
 
 */

get_header(4); ?>

<body id="government">
  	<div class="container-full">
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary" class="content-area">
			  	<div id="content" class="site-content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>Business Solutions: Government</h1>
								 </div>
							</section>		
						</div><!--heading-->
						<?php /*include (TEMPLATEPATH . '/_/components/php/hero-industry-insights.php'); */?>
					</section> <!--two-->					
					<div class="hidden-sm hidden-xs sub-navigation">
						<section class="row">
							<div class="col-lg-12 center-block">
								<nav class="navbar navbar-default sub-nav" role="navigation">
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li id="overview1"><a href="#" class="searchbychar" data-target="A" onclick="return false">Overview</a></li>
											<li id="military1"><a href="#"  class="searchbychar" data-target="B" onclick="return false">Military</a></li>
											<li id="federal-civilian1"><a href="#" class="searchbychar" data-target="C" onclick="return false">Federal Civilian</a></li>
											<li id="government-contractors1"><a href="#"  class="searchbychar" data-target="D" onclick="return false">Government Contractors</a></li>
											<li id="gsa1"><a href="#" class="searchbychar" data-target="E" onclick="return false">GSA Schedule 48</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</nav>
							</div>
						</section>
					</div><!--end sub-nav-->
					<hr />
					<div class="container" id="A">
						<?php include (TEMPLATEPATH . '/_/components/php/government-overview.php'); ?>
					</div><!--end container-->		
					<hr />
					<div class="row industry-insights">
						<section class="col-sm-12 hidden-lg hidden-md">
							<div class="container">
								<h1>Industry Insights</h1>
							</div>
							<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
						</section>
					</div>
					
					<!--ACCORDION-->
					<section class="three">
						<div class="row">
							<!--Military-->
							<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accord-padding" id="military">
								<div class="container">	
									<?php include (TEMPLATEPATH . '/_/components/php/government-military.php'); ?>
								</div>						
							</section>
  					
							<!--Federal Civilian Accordion Panel-->
							<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accord-padding" id="federal-civilian">
								<div class="container">									
									<?php include (TEMPLATEPATH . '/_/components/php/government-federal-civilian.php'); ?>
								</div>
							</section>
				
							<!--Government Contractors Accordion Panel-->	
							<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accord-padding" id="government-contractors">
								<div class="container">		
									<?php include (TEMPLATEPATH . '/_/components/php/government-government-contractors.php'); ?>
								</div>	
							</section>	
				
							<!--GSA Schedule 48 Accordion Panel-->
							<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accord-padding" id="gsa-48">
								<div class="container">	
									<?php include (TEMPLATEPATH . '/_/components/php/government-gsa.php'); ?>
								</div>
							</section>
						</div>
					</section>
					<!--end row that holds accordion-->		
					<section class="container">
						<div class="row hidden-xs">
							<section class="tab-section col-lg-12">
								<h1>Why does the Federal Government Prefer Oakwood?</h1>
								<?php include (TEMPLATEPATH . '/_/components/php/industry-tabs.php'); ?>
							</section>	
						</div><!--end tabbed section-->
					</section>
			
					<section class="content row">
						<div class="col-lg-12">
							<section class="eight hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 12-->
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>