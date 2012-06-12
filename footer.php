<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo home_url( '/' ); ?>" alt="Return home">
      <img src="<?php echo get_template_directory_uri(); ?>/images/white_ghost_contrast_11.jpg">
    </a>
    <p>Ghosts courtesy of <a href="http://www.realghostphotos.20m.com/">http://www.realghostphotos.20m.com/</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
