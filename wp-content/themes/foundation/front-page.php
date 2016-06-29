<?php
/**
 * The front page template file
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Foundation
 * @since Foundation 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		    <div class="billboard">
                <div class="video-bg">
            		<video autoplay muted loop poster="<?php get_template_directory_uri(); ?>/files/busy-new-york-intersection.jpg">
            			<source src="<?php get_template_directory_uri(); ?>/files/busy-new-york-intersection.mp4" type="video/mp4">
            			<source src="<?php get_template_directory_uri(); ?>/files/busy-new-york-intersection.webm" type="video/webm">
            			<source src="<?php get_template_directory_uri(); ?>/files/busy-new-york-intersection.ogv" type="video/ogg">
            		</video>
            	</div>
            </div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
