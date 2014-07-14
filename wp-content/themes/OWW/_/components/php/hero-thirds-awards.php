
						<div class="container">
							<section class="two-a internal">
								<div class="row over hidden-sm hidden-xs">
									<?php $awards = new WP_Query('post_type=$awards&posts_per_page=3');?>
										<ul class="col-lg-12">
											<?php query_posts('post_type=$awards'); while ($awards->have_posts()): $awards->the_post(); ?>
											<li class="col-lg-4 col-md-4 hidden-sm hidden-xs">
												<?php the_post_thumbnail('herosize'); ?>
													<p class="date"><?php the_date();?></p>
													<p class="headline size-12" style="font-size:12px;">
														<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'awards', true ) ); ?><?php the_title(); ?> </a>
													</p>
											</li>	
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</div><!--row-->
							</section><!--two-a-->
						</div><!--container-->	
						