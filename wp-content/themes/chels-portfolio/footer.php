					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    					<?php vbtk_footer_links(); ?>
		    				</nav>
		    			</div>
			        <div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<!-- all js scripts are loaded in library/vbtk.php -->
		<?php get_template_part( 'inc/ie9' ); ?>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->