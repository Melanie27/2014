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
				  	<section class="two" style="background: none; height: auto;">
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
								<nav id="menu" class="navbar navbar-default sub-nav sub-government" role="navigation">
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse container" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li id="overview1"><a href="#overview" class="searchbychar nav-btn" data-target="A">Overview</a></li>
											<li id="military1"><a href="#military"  class="searchbychar nav-btn" data-target="B">Military</a></li>
											<li id="federal-civilian1"><a href="#federal-civilian" class="searchbychar nav-btn" data-target="C">Federal Civilian</a></li>
											<li id="government-contractors1"><a href="#government-contractors"  class="searchbychar nav-btn" data-target="D">Government Contractors</a></li>
											<li id="gsa1"><a href="#gsa-schedule-48" class="searchbychar nav-btn" data-target="E">GSA Schedule 48</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</nav>
							</div>
						</section>
					</div><!--end sub-nav-->
					<hr />
					<div class="container" id="overview">
						<?php include (TEMPLATEPATH . '/_/components/php/government-overview.php'); ?>
					</div><!--end container-->		
					<hr />
					<div class="row industry-insights">
						<section class="col-sm-12 hidden-lg hidden-md">
							<div class="container">
								<h2>Industry Insights</h2>
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
							<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accord-padding" id="gsa-schedule-48">
								<div class="container">	
									<?php include (TEMPLATEPATH . '/_/components/php/government-gsa.php'); ?>
								</div>
							</section>
						</div>
					</section>
			  	</div>
					<!--end row that holds accordion-->	
					<div class="clearfix">&nbsp;</div>	
					<section class="container seven">
						<div class="row hidden-xs">
							<section class="tab-section col-lg-12">
								<h2>Why does the Federal Government Prefer Oakwood?</h2>
								<?php include (TEMPLATEPATH . '/_/components/php/industry-tabs.php'); ?>
							</section>	
						</div><!--end tabbed section-->
					</section>
					<div class="clearfix">&nbsp;</div>	
			  	</section>
					<hr class="hidden-lg hidden-md"/>
					
					
					<section class="content row">
						<div class="col-lg-12">
							<section class="eight hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 12-->
				</div><!-- #content -->
			</div><!-- #primary -->
  		</section>
<?php get_footer(); ?>