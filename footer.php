<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressourense
 */

?>

</div><!--wrapperpage-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<h2><?php _e('Contact'); ?></h2>
        <ul class="contacto">
            <li class="social"><a href="https://twitter.com/wpourense" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> <?php _e('Twitter'); ?></a></li>
            <li class="social"><a href="https://github.com/wpourense" target="_blank"><i class="fa  fa-github" aria-hidden="true"></i> <?php _e('Github'); ?></a></li>
            <li class="social"><a href="mailto:hola@wpourense.org"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php _e('Email'); ?></a></li>

        </ul>
        <h2><?php _e('Patrocinadores'); ?></h2>
        <ul class="patrocinadores">
            <li class="social"><a href="https://www.siteground.es" target="_blank"><img src="/wp-content/uploads/2017/05/logo-siteground-white.png"></a></li>
        </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
