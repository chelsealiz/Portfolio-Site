<?php
/*
Template Name: Full Width Slider
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <div id="main" class="large-12 medium-12 columns" role="main">
			
				<div>
					<?php if( have_rows('slider') ): ?>

						<div class="portfolio-slider">

						    <?php while ( have_rows('slider') ) : the_row(); ?>

						    	<div class="portfolio-slide">

									<?php 
									$thumb_id = get_sub_field('image');
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
									$thumb_url = $thumb_url_array[0];
									?>

									<?php if( get_sub_field('link') ): ?>
										
										<a href="<?php the_sub_field('link') ; ?>"> 
											<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />
										</a>

									<?php else: ?>

										<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />

									<?php endif; ?>
								
								</div>

						    <?php endwhile; ?>

					    </div>

					<?php endif; ?>

				</div>






				<?php if( have_rows('portfolio_archive') ): $i = 0; ?>
					<div class="full-archive">
					    <?php while ( have_rows('portfolio_archive') ) : the_row(); ?>



					    	<div id="slider-id-<?php echo $i; ?>" class="portfolio-archive-slider">

					    		<h2> <?php the_sub_field('slider_title'); ?> </h2>
					    	
								<?php if( have_rows('archive_slider') ): ?>

									<div class="archive-row-slider">

									    <?php while ( have_rows('archive_slider') ) : the_row(); ?>

									    	<div class="archive-row-slide">

										    	<div class="archive-row-slide-inner">

													<?php 

														$portfolio_id= get_sub_field('portfolio_item');
														$title = get_the_title($portfolio_id);

														$thumb_id = get_field('main_image', $portfolio_id);
														$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
														$thumb_url = $thumb_url_array[0];

														$link = get_the_permalink($portfolio_id);
													?>

													<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />

													<h3><?php echo $title; ?></h3>
													<a class="link-cover" href="<?php echo $link; ?>"></a>
												</div>

											</div>
											
									    <?php endwhile; ?>

								    </div>

								<?php endif; ?>
							
							</div>



					    <?php $i++; endwhile; ?>
				    </div>
				<?php endif; ?>










			    					
			</div> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
