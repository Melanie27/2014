<?php
/**
 * The template for displaying all single posts
 *
 * * Template Name: Movie Single
 
 */

get_header(7); ?>

<body id="press-releases-single">
  	<div class="container-full">  
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary">
    <div id="content" role="main">
    <section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Press Releases: Single</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds-internal.php'); ?>
		  	</section> <!--two-->	
    
    <?php
    $mypost = array( 'post_type' => 'movie_reviews', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
 
                <!-- Display Title and Author Name -->
                
                <strong>Director: </strong>
                <?php echo esc_html( get_post_meta( get_the_ID(), 'movie_director', true ) ); ?>
                <br />
 
                <!-- Display yellow stars based on rating -->
                <strong>Rating: </strong>
                <?php
                $nb_stars = intval( get_post_meta( get_the_ID(), 'movie_rating', true ) );
                for ( $star_counter = 1; $star_counter <= 5; $star_counter++ ) {
                    if ( $star_counter <= $nb_stars ) {
                        echo '<img src="' . plugins_url( 'Movie-Reviews/images/icon.png' ) . '" />';
                    } else {
                        echo '<img src="' . plugins_url( 'Movie-Reviews/images/grey.png' ). '" />';
                    }
                }
                ?>
            </header>
 
            <!-- Display movie review contents -->
            <div class="entry-content">
            	<section class="three container">
				<div class="row over2">
					<section class="col-lg-12 col-md-12">
						<div class="row">
							<section class="col-lg-8 col-md-8 press-release-list">
								<h1><?php the_title(); ?></h1>
								<section class="press-release-hero">
									
									<!-- Display featured image -->
								
										<?php the_post_thumbnail( array( 350, 350 ) ); ?>
										<?php echo esc_html( get_post_meta( get_the_ID(), 'movie_caption', true ) ); ?>
										
								
									
					
								</section>
								<section class="press-release-content">	
								           	
									<?php the_content(); ?>
									
									<p class="more">More From:
									<span class="tags"><?php  
										the_terms( $post->ID, 'movie_reviews_tags' ,  ' ' );
									?></span></p>
									<div class="clearfix"></div>
									
            		</section><!--end two thirds--> 
            		<hr />	
							</section>			
													
							<section class="hidden-lg hidden-md hidden-sm">
								<h1>Press Releases</h1>
								<?php include (TEMPLATEPATH . '/_/components/php/news-press-thumbs.php'); ?>
							</section>				
							<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>							
						</div><!--end nested row-->
					</section>
				</div><!--row-->
			</section><!--three-->
			<section class="content row">
				<div class="col-lg-12">
					<section class="four hidden-sm hidden-xs">
					</section>
				</div>
			</section><!--content 4-->			
			<hr />
			<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>				
			<hr />
            </div>
        </article>
 
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>