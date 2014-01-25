							<section class="row container hidden-sm hidden-xs">
								<div class="col-lg-12 col-md-12">
									<div id="carousel-example-generic" class="carousel slide">
										<!-- Wrapper for slides -->
										<div class="carousel-inner"> 
											<!-- Slide -->
											
											<div class="item active">
												<div class="row">
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '1'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6">
													 <?php the_post_thumbnail('carouselsize'); ?>
														<div class="carousel-caption">
															<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
														</div>
													</div>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 
													
													
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '2'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6"> 
														 <?php the_post_thumbnail('carouselsize'); ?>
														<div class="carousel-caption">
															<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
															</div>
														</div>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 	
														
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '3'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>	
														<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6"> 
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/government/military-03.jpg" alt="military-01" class="img-responsive">
															<div class="carousel-caption">
																<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
															</div>
														</div>
														<?php endwhile; ?>
													<?php wp_reset_query(); ?>
													</div><!--end row-->
												</div><!--end item-->
												
												<div class="item">
												<div class="row">
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '4'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6">
													 <?php the_post_thumbnail('carouselsize'); ?>
														<div class="carousel-caption">
															<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
														</div>
													</div>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 
													
													
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '5'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6"> 
														 <?php the_post_thumbnail('carouselsize'); ?>
														<div class="carousel-caption">
															<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
															</div>
														</div>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 	
														
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '6'
																	
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>	
														<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6"> 
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/government/military-03.jpg" alt="military-01" class="img-responsive">
															<div class="carousel-caption">
																<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) ); ?></h3>
															</div>
														</div>
														<?php endwhile; ?>
													<?php wp_reset_query(); ?>
													</div><!--end row-->
												</div><!--end item-->
												
												
												
												</div><!--end carousel-inner-->
											</div><!--end carousel-example-->
											<!-- Controls --> 
											<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span> </a> 
											<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span> </a>
										</div>
									</section><!--end row-->