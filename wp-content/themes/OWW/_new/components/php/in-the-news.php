											<div class="panel panel-default">
												<div class="panel-heading collapse3" id="collapse3">
													<h1 class="title3 panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapser">
															<h1>In the News</h1>
														</a>
														<button type="button" class="btn mobile-toggle" data-toggle="collapse" data-target="#collapseThree" id="btn-3"></button>
													</h1>
												</div>	
												 <div id="collapseThree" class="panel-collapse collapse in">
												 	<div class="panel-body">
														<h1 class="hidden-xs hidden-sm">In the News</h1>		
														<section class="latest-releases">
															<h3 class="hidden-sm hidden-xs">Latest Stories</h3>
															<?php include (TEMPLATEPATH . '/_/components/php/in-the-news-thumbs.php'); ?>
														</section><!--Latest Releases-->
														<div class="clearfix"></div>
															<?php include (TEMPLATEPATH . '/_/components/php/recent-stories.php'); ?>	
															<div class="row archives">
																<div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
																	<a class="link-archives see-all text-center" href="<?php bloginfo('url'); ?>/in_the_news/">View Archive</a>
																</div>
															</div>
														</div><!--panel body-->
													</div><!--Collapse Two-->
												</div><!--panel-->
										
									