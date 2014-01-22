												<ul class="news-thumbnails">
													<li class="clearfix">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/latest-news-tb-01.jpg" alt="latest-news-tb-01" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>
													<li class="clearfix">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/latest-news-tb-02.jpg" alt="latest-news-tb-01" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>
													<li class="clearfix">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/latest-news-tb-03.jpg" alt="latest-news-tb-01" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>
												</ul>												
												
												
												<?php
													/*$press_releases = new WP_Query('post_type=press_releases');
													$counter = 1;
													$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('posts_per_page=3&paged='.$paged);
													
													?>

																	<ul id="firemen" class="news-thumbnails">
																		<?php query_posts('post_type=press_releases'); while ($press_releases->have_posts() && $counter < 3 ): $press_releases->the_post(); ?>
																		<li class="clearfix">
																			<?php the_post_thumbnail('herosize'); ?>
																			<p class="date"><?php the_date();?></p>
																			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																		</li>
																		
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>*/