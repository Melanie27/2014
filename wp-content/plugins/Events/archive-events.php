<?php get_header(7); ?>

<body id="events">
  		<div class="container-full">
  			<section class="container landing">
		  		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>		  		
		  			<section id="primary">
			  			<div id="content" role="main">
				  			<section class="two" style="height:90px; background-image:none;">
					  			<div class="row heading">
						  			<section class="col-lg-12">
							  			<div class="container">
								  			<h1>Upcoming Events</h1>
								  		</div>
								  	</section>		
								 </div><!--heading-->
								 <?php /*include (TEMPLATEPATH . '/_/components/php/hero-events.php'); */?>
							</section>
							<!--two-->	    
							<?php if ( have_posts() ) : ?>
							<hr class="hidden-lg hidden-md hidden-sm">		
							<section class="three container">
								<div class="row over2">
									<section class="col-lg-12 col-md-12">
										<div class="row">
											<section class="col-lg-8 col-md-8 press-release-list">
												<h2 class="page-title">Join Us at These Upcoming Events</h2>
												<p>For more information about these industry events, or Oakwood Worldwide’s participation, contact <a href="mailto:oakwoodinfo@oakwood.com">oakwoodinfo@oakwood.com</a></p>
												<!-- Start the Loop -->
												<?php while ( have_posts() ) : the_post(); ?>
												<!-- Display review title and author -->
												<div class="row" id="press1">
													<ul>
														<li>
															<section class="col-lg-4 col-md-5 col-sm-4 col-xs-4 press-image">
															<?php the_post_thumbnail('newssize'); ?>
															</section>
															<section class="col-lg-8 col-md-7 col-sm-8 col-xs-8	press-text">
																<h3><?php the_title(); ?></h3>
																<!--<p class="date hidden-lg hidden-md hidden-sm"><?php the_date();?></p>-->
																<!--<p class="full-story hidden-lg hidden-md hidden-sm">
																	<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
																	</p>-->

																<p class="location"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_location', true ) ); ?></p>
																
																<p>
																<a href="<?php the_permalink(); ?>"></a>
																
																<p class="hidden-xs"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_description', true ) ); ?></</p>
																<!--<p class="full-story "><a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a></p>-->	
															</section>
															<div class="clearfix"></div>				
														</li>
													</ul>
												</div>
												<?php endwhile; ?>										       
												
												<!-- Display pagination -->
												<div class="row">
													<div class="archive-pagination col-lg-8 col-lg-offset-4 col-md-7 col-md-offset-5">
													<?php global $wp_query;
													$total_pages = $wp_query->max_num_pages; 
													if ($total_pages > 1){  
														$current_page = max(1, get_query_var('paged'));  
														echo paginate_links(array(  
														'base' => get_pagenum_link(1) . '%_%',  
														'format' => 'page/%#%',  
														'current' => $current_page,  
														'total' => $total_pages,  
														));  
													}  
        
													endif; ?>
												</div> 
											</div>
										</section><!--end two thirds-->
										<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>											
									</div><!--end nested row-->
								</section>
							</div><!--row-->
						</section><!--three-->		
    					<section class="content row">
							<div class="col-lg-12">
								<section class="four hidden-sm hidden-xs">
								</section>
							</div>
						</section><!--content 4-->
						<hr>			
						<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>
						<hr>
					</div>
				</section>
<?php get_footer(); ?>