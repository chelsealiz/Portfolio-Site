<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
						
						<section id="home-intro" class="">
							<h1><?php the_field('page_title'); ?></h1>

							<div class="home-intro-content">
								<?php the_field('intro'); ?>
							</div>

						</section>

						<section id="home-portfolio" class="">
							<h2><?php the_field('portfolio_section_title'); ?></h2>

							<div class="row home-portfolio-items">
								<?php 
								$args = array( 
									'post_type' => 'portfolio', 
									'posts_per_page' => 3 	
								); 
								$loop = new WP_Query( $args );
								?>

								<?php if ( $loop->have_posts() ) : ?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); setup_postdata( $loop );  ?>
									
										<div class='portfolio-item columns small-1 medium-4'>
											<a href="<?php the_permalink() ; ?>"> 
												<?php the_title(); ?>

												<?php 
												$thumb_id = get_field('main_image');
												$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'home-portfolio-small', true);
												$thumb_url = $thumb_url_array[0];
												?>
												
											
												<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />
											</a>


										</div>

									<?php endwhile; wp_reset_postdata(); ?>
								<?php endif; ?>
							</div>

						</section>

						<section id="home-contact" class="">
							<h2><?php the_field('contact_section_title'); ?></h2>

							<div class="home-contact-form">
								<?php the_field('contact_form'); ?>
							</div>

						</section>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

