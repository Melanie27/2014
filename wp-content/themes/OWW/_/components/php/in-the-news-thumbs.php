																	<h1 class="hidden-lg hidden-md hidden-sm">In the News for 2013</h1>
																	<?php $in_the_news = new WP_Query('post_type=in_the_news&posts_per_page=3');?>

																	<ul class="news-thumbnails">
																		<?php query_posts('post_type=in_the_news'); while ($in_the_news->have_posts()): $in_the_news->the_post(); ?>
																		<li class="clearfix">
																			<?php the_post_thumbnail('herosize'); ?>
																			<p class="date"><?php the_date();?></p>
																			<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'in_the_news_blurb', true ) ); ?></a>
																		</li>
																		
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>