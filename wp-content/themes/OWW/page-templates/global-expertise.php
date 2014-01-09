<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Global Expertise
 
 */

get_header(3); ?>
<body id="global-expertise">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">	
		 <section class="two">
			 <div class="row heading">
				 <section class="col-lg-12">
					 <div class="container">
						 <h1>Global Experience and Expertise</h1>										
					</div>
				</section>		
			</div><!--heading-->		
			<?php include (TEMPLATEPATH . '/_/components/php/hero.php'); ?>	
		  </section> <!--two container-->					
		  <section class="three container">
			  <div class="row">
				  <section class="col-lg-12 col-md-12 global-intro">
					  <h1>Intro Placeholder Text</h1>
					  <h2>Our service model centers around our front-line accountability.</h2>
					  <p>Our philosophy is about finding solutions, not filling existing or vacant apartments - allowing us the flexibility to place you wherever you need to be. We remove your critical resources from the day-to-day operations of housing management, allowing you and your guests to focus on your work, not ours.</p>
					</section>
				</div>
			</section>
			<hr />
			<section class="three three-a container">
				<div class="row">
					<section class="col-lg-12 col-md-12 global-reach">
						<h1>Global Reach</h1>
						<h2>Wherever you need to go, Oakwood Worldwide is there.</h2>
					</section>
				</div>				
				<div class="row">
					<section class="col-lg-12 col-md-12">						
						<div class="row">
							<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12">		
								<div class="solutions">
									<a href="#" class="industry-sections">
										<img src="<?php bloginfo( 'template_directory' ); ?>/images/global-services/global-reach.jpg" alt="global-reach" class="img-responsive">
										<header class="industries">
											<h3>Explore the Oakwood Worldwide Difference</h3>
											<div class="clearfix"></div>
										</header>
									</a>
								</div>
							</section>
							<section class="col-lg-8 col-md-8 col-sm-6">
								<p>Learn about how Oakwood Worldwide continues to set the global standard for corporate housing with the largest flexible inventory, in-depth regional expertise across six continents, and a streamlined supply chain to ensure the highest quality and greatest efficiency for our guests.</p>
								<a class="orange-link" href="global-scale-and-inventory">Learn More &#8594;</a>	
							</section>
						</div><!--end nested row-->	
					</section>		
				</div>			
			</section><!--three-->		
			<section class="row">
				<div class="col-lg-12">
					<section class="four hidden-sm hidden-xs">
					</section>
				</div>
			</section><!--content 4-->	
			<hr />
			<section class="five container">			
				<div class="row">
					<section class="col-lg-12 col-md-12 col-sm-12 experience">
						<h1>Experience and Expertise</h1>
						<h2>Oakwood Worldwide's commitment to providing seamless housing solutions extends far past our physical properties.</h2>		
					</section>
				</div>			
				<div class="row">
					<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12">		
						<div class="solutions clearfix" id="client-services">
							<a href="client-services" class="industry-sections">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/consulting.jpg" alt="Woman Texting" class="img-responsive" />
								<header class="industries">
									<h3>Client Services</h3>
									<div class="clearfix"></div>
								</header>
							</a>
							<section class="industry-text">	
								<p class="consult-desc">Our dedicated team of Associates work to provide you with a seamless experience.</p>	
							</section>
						</div>
					</section>	
					<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12">		
						<div class="solutions" id="technologies">
							<a href="technologies" class="industry-sections">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/government.jpg" alt="Woman Texting" class="img-responsive" />
								<header class="industries">
									<h3>Technologies</h3>
									<div class="clearfix"></div>
								</header>
							</a>
							<section class="industry-text">	
								<p class="consult-desc">Proprietary technologies enrich your experience from start to end, providing the analytics, access and ease you need to manage your housing programs efficiently.</p>	
							</section>
						</div>
					</section>	
					<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12">		
						<div class="solutions" id="safety-security">
							<a href="safety-security" class="industry-sections">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/insurance.jpg" alt="Woman Texting" class="img-responsive" />
								<header class="industries">
									<h3>Safety and Security</h3>
									<div class="clearfix"></div>
								</header>
							</a>
							<section class="industry-text">	
								<p class="consult-desc">Our commitment to duty of care and crisis management ensures that risks are minimized, your guests are safe and your experience always exceeds expectations.</p>	
							</section>
						</div>
					</section>	
				</div>
			</section><!--content 5-->	
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