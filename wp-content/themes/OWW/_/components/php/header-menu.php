<header>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <section class="container">
        <div class="navbar-header">      
          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  	<button class="btn find-housing" type="button">Find Housing</button>
		  	<a href="index.php" id="logo" >
			  	<img src="<?php bloginfo( 'template_directory' ); ?>/images/sitewide/logo-oww.jpg" alt="Oakwood Worldwide Logo"/>
			</a>		
        </div>
        <div class="navbar-collapse collapse in">
        	<ul class="nav navbar-nav ">
				<li class="hidden-lg hidden-md hidden-xs">
					<a href="index.php">Home</a>
				</li>
								<li class="dropdown">
					<a href="global-expertise.php">Global Expertise</a>
					<ul class="dropdown-menu">
						<li><a href="global-reach/">Global Scale and Inventory</a></li>
						<li><a href="client-services.php">Client Services</a></li>
						<li><a href="technologies.php">Technologies</a></li>
						<li><a href="safety-security.php">Safety & Security</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="business-solutions.php">Business Solutions</a>
					<ul class="dropdown-menu">
						<li><a href="individual-business-traveler.php">Individual Business Traveler</a></li>
						<li><a href="government.php">Government</a></li>
						<li><a href="entertainment.php">Entertainment</a></li>
						<li><a href="relocation.php">Relocation</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="vision-leadership.php">Vision and Leadership</a>
					<ul class="dropdown-menu">
						<li><a href="executive-leadership.php">Executive Committee</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="news.php">News</a>
					<ul class="dropdown-menu">
						<li><a href="press-releases.php">Press Releases</a></li>
						<li><a href="in-the-news.php">In The News</a></li>
						<li><a href="awards.php">Awards</a></li>
						<li><a href="upcoming-events.php">Events</a></li>
					</ul>
				</li>
				<li>
					<a href="affiliations.php">Affiliations</a>
				</li>
				<li>
					<a href="careers.php">Careers</a>
				</li>	
			</ul>
			
			<?php
			wp_nav_menu( array(
				'menu'				=> 'primary',
				'theme_location'	=> 'primary',
				'depth'				=> 2,
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse navbar-ex1-collapse',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
				'walker'			=> new wp_bootstrap_navwalker())
			);
		?>
        </div><!--/.nav-collapse -->
      </section>
    </div><!--navbar-->
</header><!-- header -->

						  
