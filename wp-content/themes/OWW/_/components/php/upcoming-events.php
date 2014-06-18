					<?php $events = new WP_Query('post_type=events&posts_per_page=3');?>
						<ul class="news-thumbnails">
							<?php query_posts('post_type=events'); while ($events->have_posts()): $events->the_post(); ?>
							<li class="clearfix">
								<span class="hidden-xs"><?php the_post_thumbnail('herosize'); ?></span>
								<span class="hidden-lg hidden-md hidden-sm pull-left col-xs-4 press-image no-left-padding">
									<?php the_post_thumbnail('newssize'); ?>
								</span>	
								<p class="date hidden-xs hidden-sm"><?php the_date();?></p>
								<h3 class="hidden-lg hidden-md"><?php the_title(); ?></h3>
								<p class="location"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_location', true ) ); ?></p>											
								<p class="headline hidden-sm hidden-xs">
									<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_title', true ) ); ?>
									</a>
								</p>
							</li>
																		
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</ul>									
						<div class="hidden-lg hidden-md hidden-sm">
							<?php include (TEMPLATEPATH . '/_/components/php/btn-all-events.php'); ?>	
						</div>
											
												
												
												