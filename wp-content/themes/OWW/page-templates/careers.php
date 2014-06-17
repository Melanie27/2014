<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Careers
 
 */

get_header(3); ?>
<body id="careers">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
			 <div class="row heading">
				 <section class="col-lg-12">
					 <div class="container">
						 <h1><?php the_title(); ?></h1>										
					</div>
				</section>		
			</div><!--heading-->	
		  </section> <!--two container-->							
		  <section class="three container">
			<div class="row">
				<section class="col-lg-12 col-md-12 career-intro">
					<h2>Working at Oakwood Worldwide</h2>
					<h3>Oakwood Worldwide offers some of the best training, compensation and benefits in the industry.</h3>
					<p>Placeholder body. At Oakwood Worldwide, we know our employees make it possible for us to consistently deliver world-class service to our internal and external clients alike. That’s why we work hard to offer competitive compensation, benefits package and an empowering work environment.</p>
				</section>
				<?php include (TEMPLATEPATH . '/_/components/php/career-icons.php'); ?>						
			</div>
		</section>
		
		<section class="container three three-a hidden-sm hidden-xs">
			<div class="row">
				<section class="col-lg-12 col-md-12 search-jobs">
					<h2>Search Current Openings</h2>	
					<iframe src="http://sj.tbe.taleo.net/SJ2/ats/careers/jobSearch.jsp?org=OAKWOODWW&cws=1" frameborder="0" height="900" width="800">[Your user agent does not 
support frames or is currently configured not to display 
frames.]</iframe>		
				</section>
			</div>					
		</section>		
		<hr />
  		<!--Supply Chain-->
  		<section class="container three three-a">
			           
			<div class="row career-promo">
				<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 oakwood-university thirds">
					<div class="row promo-header">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Oakwood University</h2>
						</section>
					</div>
					<div class="row career-trio">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/careers/careers1.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>Throughout its history, Oakwood Worldwide has consistently invested in job training and career advancement for employees..</p>
						</section>
					</div>	
				</section>
				<hr class="hidden-lg hidden-md hidden-sm">
				<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 why-oakwood thirds">
					<div class="row promo-header">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Why Oakwood Worldwide</h2>
						</section>
					</div>
					<div class="row career-trio">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/careers/careers2.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis dui quam, sit amet bibendum enim varius sit amet. Curabitur vel elit aliquet</p>
						</section>
					</div>
				</section>
				<hr class="hidden-lg hidden-md hidden-sm">
				<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 referral thirds">
					<div class="row promo-header">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Employee Referral Program</h2>
						</section>
					</div>
					<div class="row career-trio">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/careers/careers3.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>Throughout its history, Oakwood Worldwide has consistently invested in job training and career advancement for employees.</p>
						</section>
					</div>
				</section>
				
			</div>
		</section><!--three-->				
		<hr />	

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>