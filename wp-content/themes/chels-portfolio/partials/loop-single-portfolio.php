<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'partials/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		

		<?php 
		//gets img id 
			$thumb_id = get_field('main_image');
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
			$thumb_url = $thumb_url_array[0];
		?>
		<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />
		

		<div>
			<?php the_field('project_details'); ?>

			<?php if( get_field('project_link_text') && get_field('project_link_url') ): ?>

				<?php if( get_field('open_in_new_tab') ): ?>
						<a href="<?php the_field('project_link_url'); ?>" target="_blank"><?php the_field('project_link_text'); ?></a>
				<?php else: ?>
						<a href="<?php the_field('project_link_url'); ?>"><?php the_field('project_link_text'); ?></a>
				<?php endif; ?>

			<?php endif; ?>
		</div>


		<div>
			<?php if( have_rows('additional_images') ): ?>

			    <?php while ( have_rows('additional_images') ) : the_row(); ?>

					<?php 
					$thumb_id = get_sub_field('image');
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
					$thumb_url = $thumb_url_array[0];
					?>
					<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />

					<div>
						<?php the_sub_field('caption'); ?>
					</div>

			    <?php endwhile; ?>


			<?php endif; ?>

			
		</div>
		

		
		<?php ?>
		<?php ?>



	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'vbtktheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
	<?php comments_template(); ?>	
													
</article> <!-- end article -->