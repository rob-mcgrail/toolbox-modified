<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
			<article id="post-0" class="post error404 not-found">
			  <h1>404 Not found</h1>
				<div class="entry-content">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg">
					<p>It seems we can't find what you're looking for.</p>
					<p>Perhaps searching is a thing?</p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
