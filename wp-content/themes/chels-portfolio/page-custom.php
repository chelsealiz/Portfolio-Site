<?php
/*
Template Name: Full Width page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="small-12 columns" role="main">
					
					    <?php get_template_part( 'partials/loop', 'page' ); ?>
					    						
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
