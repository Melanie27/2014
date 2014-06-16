<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Vision & Leadership
 */

get_header(2); ?>

<body id="vision-leadership">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		 	<div id="primary" class="content-area">
			 	<div id="content" class="site-content" role="main">
				 	<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Vision and Leadership</h1>
								</div>
							</section>		
						</div><!--heading-->		
						<?php include (TEMPLATEPATH . '/_/components/php/hero-halves.php'); ?>
					</section> <!--two container-->	
					<section class="hidden-lg hidden-md hidden-sm col-md-6 col-xs-12 hero-halves">
						<h1>2013</h1>
						<h2>Oakwood Worldwide</h2>
						<p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
					</section><!--End two halves-->	
					<hr />
					<section class="three container">
						<div class="row over2a">
							<section class="col-lg-9 col-md-9">
								<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
								<h2>Morbi mollis augue nec lorem feugiat ornare. Pellentesque ultrices quis mi a mattis. Ut mollis eget urna at mattis. Duis ultricies vehicula sapien vitae tempus.</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo lacus et nibh venenatis, sed rhoncus erat pharetra. Mauris lobortis odio et ante viverra porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ante quis lectus aliquet placerat sit amet in risus.</p>
							</section>
						</div>
					</section>
					<hr/>
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 col-xs-12">
							<?php include (TEMPLATEPATH . '/_/components/php/executive-committee.php'); ?>												
							</section>
						</div><!--row-->
					</section><!--three-->
					<hr />
					<section class="content row">
						<div class="col-lg-12">
							<section class="four hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 4-->
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>