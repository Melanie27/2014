										<!--News Navigation-->
											<section class="col-lg-4 col-md-4 hidden-xs">
												<section class="news navigation hidden-xs">
													<h1>News</h1>
														<ul>
															<!--Press Releases-->
															<li><h4><a href="<?php bloginfo('url'); ?>/press_releases/">Press Releases</a></h4>
		
															<!--List all the terms, with link to term archive-->			
															<?php
															$args = array( 'hide_empty=0' );
															$terms = get_terms('press_releases_tags', $args);
															$count = count($terms); $i=0;
																if ($count > 0) {
																	
																	echo '<ul class="release-years press-releases-archive">';
																	$term_list = '<span class="my_term-archive">';
																	foreach ($terms as $term) {
																		$i++;
																		$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																	}
																	
																	echo $term_list;
																	echo "</ul>";
																}
																?>	
															</li>
															
															<!--In the News-->
															<li><h4><a href="<?php bloginfo('url'); ?>/in_the_news/">In the News</a></h4>
																<!--List all the terms, with link to term archive-->			
																<?php
																	$args = array( 'hide_empty=0' );
																	$terms = get_terms('in_the_news_years', $args);
																	$count = count($terms); $i=0;
																	if ($count > 0) {
																	
																	echo '<ul class="release-years in-news-archive">';
																	$term_list = '<span class="my_term-archive">';
																	foreach ($terms as $term) {
																		$i++;
																		$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																	}
																	
																	echo $term_list;
																	echo "</ul>";
																}
																?>	
															</li>
															<!--Awards-->
															<li><h4><a href="<?php bloginfo('url'); ?>/awards/">Awards & Honors</a></h4>
																<!--List all the terms, with link to term archive-->	
																<?php
																	$args = array( 'hide_empty=0' );
																	$terms = get_terms('awards_tags', $args);
																	$count = count($terms); $i=0;
																	if ($count > 0) {
																	
																	echo '<ul class="release-years awards-honors-archive">';
																	$term_list = '<span class="my_term-archive">';
																	foreach ($terms as $term) {
																		$i++;
																		$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																	}
																	
																	echo $term_list;
																	echo "</ul>";
																}
																?>	
															
															</li>
															<!--Events-->
															<li><h4><a href="<?php bloginfo('url'); ?>/events/">Upcoming Events</a></h4>
															
															
															<!--List all the terms, with link to term archive-->			
																<?php
																	$args = array( 'hide_empty=0' );
																	$terms = get_terms('events_event_month', $args);
																	$count = count($terms); $i=0;
																	if ($count > 0) {
																	
																	echo '<ul class="release-years upcoming-events-archive">';
																	$term_list = '<span class="my_term-archive">';
																	foreach ($terms as $term) {
																		$i++;
																		$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																	}
																	
																	echo $term_list;
																	echo "</ul>";
																}
																?>	

															
															</li>
														</ul>
												</section><!--end news-->	
												<section class="media-relations hidden-sm hidden-xs">
													 	
													 	<?php include (TEMPLATEPATH . '/_/components/php/media-relations.php'); ?>
												</section><!--Media Relations-->	
											</section><!--end one third-->