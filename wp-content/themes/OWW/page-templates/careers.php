<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Careers
 
 */

get_header(3); ?>
<body id="global-scale">
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
				<section class="col-lg-12 col-md-12 global-intro">
					<h1>Intro Placeholder Text</h1>
					<h2>Placeholder. Wherever you need to go, Oakwood Worldwide is there.</h2>
					<p>Placeholder body. Our goal is to find you the right option, in the right location, at the right price. Oakwood Worldwide does not own apartments outright, but governs an expansive global inventory consisting of franchisees and managed properties. Our exclusive network of suppliers gives us the flexibility on volume and location, providing our clients with more properties and cost options. Guests benefit from satisfaction standards with competitive provider system.</p>
				</section>
				<?php include (TEMPLATEPATH . '/_/components/php/global-destinations.php'); ?>						
			</div>
		</section>
		<hr />
		<section class="container three three-a">
			<div class="row">
				<section class="col-lg-12 col-md-12 regional-supply">
					<h1>Regional Expertise</h1>	
					<iframe src="http://sj.tbe.taleo.net/SJ2/ats/careers/jobSearch.jsp?org=OAKWOODWW&cws=1" frameborder="0" height="950" width="800">[Your user agent does not 
support frames or is currently configured not to display 
frames.]</iframe>		
				</section>
			</div>					
			</section>		
		<hr />
  		<!--Supply Chain-->
  		<section class="container three three-a">
			<div class="row">
				<section class="col-lg-12 col-md-12 regional-supply">
					<h1>Supply Chain</h1>			
				</section>
			</div>             
			<div class="row regional-supply">
				<section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="row">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/global-services/regional-icon.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-8">
							<p>Oakwood Worldwide has partnerships with more than 1,300 lorem ipsum.</p>
						</section>
					</div>	
				</section>
				<section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="row">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/global-services/regional-icon.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-8">
							<p>Associates speak over 26 languages and can communicate important information to guests in a variety of ways.</p>
						</section>
					</div>
				</section>
				<section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="row">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/global-services/regional-icon.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-8">
							<p>Furnishings are managed by Oakwood Worldwide personnel</p>
						</section>
					</div>
				</section>
				<section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="row">
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/global-services/regional-icon.jpg" alt="regional-icon" class="img-responsive">
						</section>
						<section class="col-lg-12 col-md-12 col-sm-12 col-xs-8">
							<p>Guests wont see a difference between staying in managed</p>
						</section>
					</div>
				</section>
			</div>
		</section><!--three-->				
		<hr />	

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>