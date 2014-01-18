<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Vision Leadership Single
 
 */

get_header(2); ?>

 <body id="executive-leadership">
  	<div class="container-full">
  		<section class="container landing">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Executive Committee</h1>
						</div>
					</section>		
				</div><!--heading-->						
		  	</section> <!--two container-->	
		  	
		  	
		  	<?php
			  	$mypost = array( 'post_type' => 'vision-leadership', );
			  	$loop = new WP_Query( $mypost );
			  	?>
			  	<?php /* The loop */ ?>
			  	<?php while ( have_posts() ) : the_post(); ?>
		  	
		  					
		  	<section class="three container">
				<div class="row over2">
					<section class="col-lg-12 col-md-12 col-xs-12 no-left-padding">
						<div class="row">
							<section class="col-lg-12 col-md-12 clearfix">	
								<h1><?php the_title()?> <span class="title hidden-xs"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></span> </h1>
								<h3 class="hidden-lg hidden-md hidden-sm"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></h3>
							</section>	
						</div>	
						<div class="row">
							<section class="col-lg-8 col-md-8">
								<div class="row">
									<section class="col-lg-4 col-md-3 col-sm-3 col-xs-6 pull-left">
										<?php the_post_thumbnail(); ?>
									</section>
									<section class="col-lg-8 col-md-9 no-left-padding executive-text">
										<?php the_content(); ?>
									</section>
								</div>
							</section>
							
					
					 <?php endwhile; ?>
					 
					 
					
							<hr class="hidden-lg hidden-md hidden-sm" />
								<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 executive-committee">
									<ul class="leadership-photos">
										<div class="row">
											<section class="col-lg-12 col-md-12 col-sm-6">
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/howard-ruby-tb.jpg" alt="Howard Ruby" class="pull-left" />
													<h3 class="name">Howard Ruby</h3>
													<p class="title">Chairman, Founder and COO</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/howard-ruby/" class="orange-link">Full Bio &#8594;</a></p>
												</li>
											</section>
											<section class="col-lg-12 col-md-12 col-sm-6">
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/jill-chapman-tb.jpg" alt="Jill Chapman" class="pull-left" />
													<h3 class="name">Jill Chapman</h3>
													<p class="title">SVP, Global Sales and Marketing</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/jill-chapman/" class="orange-link">Full Bio &#8594;</a></p>															
												</li>
											</section>
										</div>		
										<div class="row">
											<section class="col-lg-12 col-md-12 col-sm-6">
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/marina-lubinsky-tb.jpg" alt="Marina Lubinsky" class="pull-left" />
													<h3 class="name">Marina Lubinsky</h3>
													<p class="title">SVP and Chief Information Officer</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/marina-lubinsky/" class="orange-link">Full Bio &#8594;</a></p>												
												</li>
											</section>
											<section class="col-lg-12 col-md-12 col-sm-6">	
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/ric-villarreal-tb.jpg" alt="Ric Villarreal" class="pull-left" />
													<h3 class="name">Ric Villarreal</h3>
													<p class="title">President</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/ric-villarreal/" class="orange-link">Full Bio &#8594;</a></p>												
												</li>
											</section>	
										</div>		
										<div class="row">
											<section class="col-lg-12 col-md-12 col-sm-6">			
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/bill-foltz-tb.jpg" alt="Bill Foltz" class="pull-left" />
													<h3 class="name">Bill Foltz</h3>
													<p class="title">SVP and Chief Financial Officer</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/bill-foltz/" class="orange-link">Full Bio &#8594;</a></p>
												</li>
											</section>
											<section class="col-lg-12 col-md-12 col-sm-6">
												<li class="clearfix">
													<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_players/ana-castellanos-tb.jpg" alt="Ana Castellanos" class="pull-left" />
													<h3 class="name">Ana Castellanos</h3>
													<p class="title">VP, Chief Human Resources Officer</p>
													<p><a href="<?php bloginfo('url'); ?>/vision-leadership/ana-castellanos/" class="orange-link">Full Bio &#8594;</a></p>												
												</li>
											</section>
										</div>
									</ul>
								</section>
							</div>										
						</section>
					</div><!--row-->			
				</section><!--three-->		
				<hr />
				<section class="row">
					<div class="col-lg-12">
						<section class="four hidden-sm hidden-xs">
						</section>
					</div>
				</section><!--content 4-->
				
			
				
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php wp_reset_query(); ?>
<?php get_footer(); ?>