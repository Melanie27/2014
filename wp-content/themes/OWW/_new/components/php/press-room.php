											<div class="panel panel-default">
												<div class="panel-heading collapse2" id="collapse2">
													<h1 class="title2 panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapser">
															<h1>Press Room</h1>	
														</a>
														<button type="button" class="btn mobile-toggle" data-toggle="collapse" data-target="#collapseTwo" id="btn-2"></button>
													</h1>
												</div>	
												 <div id="collapseTwo" class="panel-collapse collapse in">
												 	<div class="panel-body">
														<h1 class="hidden-xs hidden-sm">Press Room</h1>	
														<section class="latest-releases">
															<h3 class="hidden-sm hidden-xs">Latest Releases</h3>
															<?php include (TEMPLATEPATH . '/_/components/php/news-thumbs.php'); ?>																		
														</section><!--Latest Releases-->
														<div class="clearfix"></div>
															<?php include (TEMPLATEPATH . '/_/components/php/recent-releases.php'); ?>	
														<div class="row archives">
															<div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
																<a class="link-archives see-all text-center" href="<?php bloginfo('url'); ?>/press_releases/">View Archive</a>
															</div>
														</div>
													</div><!--panel body-->
												</div><!--Collapse Two-->
											</div><!--panel-->
											
										