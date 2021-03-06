								<div class="row over2">
									<section class="col-lg-12 col-md-12 col-sm-12 news-columns">	
										<h1 class="solutions-head">Solutions by Industry</h1>
										<h2>We invented the corporate housing concept-and we're still leading the way. Find out how we support your industry.</h2>
										<p>Whether you're relocating employees, have a group travel event, need to house consultants for a long-term assignment, are looking for military housing - or any other business need -our full-service solutions can take care of it all. Contact us to customize your corporate housing program.</p>
										<div class="row solutions-columns">
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">		
												<div class="solutions consulting">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/individual-business-traveler/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/consulting.jpg" alt="Woman Texting" class="img-responsive" />
														<header class="industries">
															<h3>Individual Business Traveler</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">	
														<p class="consult-desc">Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<h4>Case Study</h4>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'individual business traveler'
																	
																	));
																	
																	?>
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
															<section class="col-lg-6 col-md-6">
																<h4>Whitepaper</h4>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'individual business traveler'
																	
																	));
																	
																	?>
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
														</div><!--end nested row-->
													</section>
												</div><!--end consulting-->
											</section><!--Column 1-->
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
												<div class="solutions government">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/government" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/government.jpg" alt="Man Texting" class="img-responsive " />
														<header class="industries">
															<h3>Government</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<h4>Case Study</h4>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'government'																	
																	));																	
																	?>
																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>

															</section>
															<section class="col-lg-6 col-md-6">
																<h4>Whitepaper</h4>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'government'
																	));
																	?>
																
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
														</div><!--end nested row-->
													</section>
												</div><!--end government-->
											</section>
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
												<div class="solutions government">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/entertainment/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/entertainment.jpg" alt="Man Texting" class="img-responsive " />
														<header class="industries">
															<h3>Entertainment</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<h4>Case Study</h4>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'entertainment'
																	
																	));
																	
																	?>																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline">
																	<a href="<?php the_permalink(); ?>">
																	<?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
															<section class="col-lg-6 col-md-6">
																<h4>Whitepaper</h4>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'entertainment'
																	));
																?>
																
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>																
															
															</section>
														</div><!--end nested row-->
													</section>
												</div><!--end entertainment-->
											</section>
										</div>
									</section>
								</div> <!--end row-->		
								<div class="row over2">
									<section class="col-lg-12 col-md-12 col-sm-6 news-columns">	
										<div class="row">
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">		
												<div class="solutions relocation">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/relocation/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/relocation.jpg" alt="Woman on iPad" class="img-responsive"/>
														<header class="industries">
															<h3>Relocation</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<h4>Case Study</h4>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'relocation'
																	
																	));
																	
																	?>
																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>

															</section>
															<section class="col-lg-6 col-md-6">
																<h4>Whitepaper</h4>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'relocation'
																	
																	));
																?>
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>	
															</section>
														</div><!--end nested row-->
													</section>
												</div><!--end relocation-->
											</section><!--Column 2-->	
											<hr class="hidden-lg hidden-md hidden-sm"/>
											<section class="col-lg-8 col-md-8 col-sm-12 col-xs-12 industry-affiliations">
												<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/affiliations-fpo.jpg" alt="affiliations-fpo" class="img-responsive hidden-xs" />
												<h2>Headline Directing People to Check Out the Industry Afflications Page</h2>
												<p>Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.Lorem ipsum in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.Lorem ipsum in dui mauris. Vivamus hendrerit.</p>
												<a href="<?php bloginfo( 'url' ); ?>/affiliations/" class="orange-link">Call to action &#8594</a>	
											</section><!--Industry Affiliations Section-->
										</div><!--end nested row-->
									</section>
								</div>