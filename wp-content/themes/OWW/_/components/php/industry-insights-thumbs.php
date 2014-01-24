																							
												
												
												<?php $industry_insights = new WP_Query('post_type=industry_insights&posts_per_page=3');?>

																	<ul class="news-thumbnails">
																		<?php query_posts('post_type=industry_insights'); while ($industry_insights->have_posts()): $industry_insights->the_post(); ?>
																		<li class="clearfix">
																			<?php the_post_thumbnail('herosize'); ?>
																			<p class="date"><?php the_date();?></p>
																			<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'industry_insight_blurb', true ) ); ?></p></a>
																		</li>
																		
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>