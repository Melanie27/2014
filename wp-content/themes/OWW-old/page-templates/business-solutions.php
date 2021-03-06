<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Business Solutions
 
 */

get_header(2); ?>

<body id="business-solutions">
  	<div class="container-full">  
  		<section class="container landing">
		 <?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
			 <div class="row heading">
				 <section class="col-lg-12">
					 <div class="container">
						 <h1>Business Solutions and Industry Insights</h1>
					</div>
				</section>		
			</div><!--heading-->	
		  </section> <!--two-->		
		  <section class="three container">
			  <?php include (TEMPLATEPATH . '/_/components/php/industry-solutions.php'); ?>	
		  </section><!--three-->				
		<div class="row">
			<div class="col-lg-12">
				<section class="four hidden-sm hidden-xs">
				</section>
			</div>
		</div><!--content 4-->
		<hr />
		<section class="row industry-insights">
			<div class="col-lg-12">
				<section class="five">
					<div class="container">		
						<h1><a href="industry-insights.php">Industry Insights</a></h1>
						<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
					</div><!--container-->
				</section><!--five-->
			</div>
		</section>
  		<hr />
  		<section class="row">
			<div class="col-lg-12">
				<section class="six hidden-sm hidden-xs">
				</section>
			</div>
		</section><!--content 6-->
		
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>