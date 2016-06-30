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
            		<video autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/files/busy-new-york-intersection.jpg">
            			<source src="<?php echo get_template_directory_uri(); ?>/files/busy-new-york-intersection.mp4" type="video/mp4">
            			<source src="<?php echo get_template_directory_uri(); ?>/files/busy-new-york-intersection.webm" type="video/webm">
            			<source src="<?php echo get_template_directory_uri(); ?>/files/busy-new-york-intersection.ogv" type="video/ogg">
            		</video>
            	</div>
            </div>

            <ul class="feature-cards">
                <li class="card">
                    <header>
                        <h3>Feature One</h3>
                    </header>
                    <div>
                        Some feature text...
                    </div>
                </li>
                <li class="card">
                    <header>
                        <h3>Feature Two</h3>
                    </header>
                    <div>
                        Some feature text...
                    </div>
                </li>
                <li class="card">
                    <header>
                        <h3>Feature Three</h3>
                    </header>
                    <div>
                        Some feature text...
                    </div>
                </li>
            </ul>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
