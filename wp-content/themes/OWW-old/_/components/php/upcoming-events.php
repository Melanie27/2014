											<div class="col-lg-12 col-md-12 col-sm-6 events-posts">	
											
											<?php $events = new WP_Query('post_type=events&posts_per_page=4');?>
												<ul class="news-thumbnails events" style="display:inline-block;">
												<?php query_posts('post_type=events'); while ($events->have_posts()): $events->the_post(); ?>	
													<li class="clearfix pull-left">
														<?php the_post_thumbnail('herosize'); ?>
														<p class="date"><?php the_date();?></p>
														<p class="headline">
															<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_blurb', true ) ); ?></a>
														</p>
													</li>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?>
														
												</ul>	
											</div>
											<div class="hidden-lg hidden-md hidden-sm">
												 <?php include (TEMPLATEPATH . '/_/components/php/btn-all-events.php'); ?>	
											</div>
											
												
												
												