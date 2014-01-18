<section class="executive-committee row">
	<div class="col-lg-4 col-md-4 col-sm-12 first-third-one-third">
		<section class="row">
			<div class="col-lg-12 col-md-12 col-sm-6">		
				<h1>Executive Committee</h1>
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/upcoming-events-01.jpg" alt="upcoming-events-01" class="img-responsive hidden-xs">
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-6 hidden-xs">		
				<p class="blurb">Sed aucto lorem ipsum dolore sit amet ndisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posu aesent. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
				<div class="row archives">
					<div class="col-md-12 col-sm-12">
						<a class="link-archives text-center" href="#">View All Executive Bios</a>
					</div>
				</div>
			</div>
		</section>									
	</div>
	
	
	
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 leaders top">
		<ul class="leadership-photos">
			
			<!-- Start the Loop -->
            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Display review title and author -->
			
			<li class="clearfix">
				<?php the_post_thumbnail('leadershipsize'); ?>
                    <h3 class="name"><?php the_title(); ?></a></h3>
                    <p class="title"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="orange-link">Full Bio &#8594;</a></p>								
			</li>
			
			<?php endwhile; ?>
			
		</ul>
	</div>
</section>