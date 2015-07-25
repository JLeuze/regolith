<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Regolith
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-content">
				
					<div id="404-widgets" class="widget-area" role="complementary">
						<?php dynamic_sidebar( '404-widgets' ); ?>
					</div><!-- #404-widgets -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
