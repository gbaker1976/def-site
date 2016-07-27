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
				<h1 class="billboard-title">Where Learning Becomes Life</h1>
            </div>
			<div class="billboard-trailer">
				<h2>Programs for At-Risk Central Indiana Students in Grades 8-12</h2>
				<p>
					We offer programs that provide hands-on experience to support STEM
					career exploration and preparation during school hours, as an
					after-school program, and during summer months.
				<p>
			</div>
            <ul class="feature-cards">
                <li class="card">
                    <header>
                        <h3>YES Program</h3>
                    </header>
                    <div>
						<p>
							Since 2012, we have offered our Youth Enhancement Summer Program (YES!),
							now called STEM YES!, an intense summer program for at-risk, underrepresented
							Central Indiana students in grades 10-12 to explore STEM careers in a work-based
							environment. During STEM (Science, Technology, Engineering, Math) YES!,
							students develop competencies in teamwork, presentation skills, business
							planning, social etiquette, and customer service as they experience day-to-day
							work in the business lines of management, product/service development, marketing,
							finance, and operations. As students gain new understanding of all of these
							things, they also learn about businesses and careers within the various STEM
							fields and the skills required to take advantage of the opportunities.
							<br />
							<a href="">Learn More &gt;</a>
						</p>
                    </div>
                </li>
                <li class="card">
                    <header>
                        <h3>Workplace Learning Programs</h3>
                    </header>
                    <div>
                        <p>
							We place students interested in experiencing a real work environment as
							part of their career exploration process with Central Indiana employers
							interested in developing a more diverse workforce. Our close ties to
							DirectEmployers Association have enabled us to form strong relationships
							with over 700 companies looking for linkages to talented future employees.
							We arrange for local employers to provide one day to one-week job shadowing
							opportunities, predominantly for students in grades 8-10. We also work to
							connect students in grades 11-12 with employers through semester-long
							internship opportunities.
							<br />
							<a href="">Learn More &gt;</a>
						</p>
                    </div>
                </li>
                <li class="card">
                    <header>
                        <h3>Hands-on Business Simulation Learning</h3>
                    </header>
                    <div>
                        <p>
							We offer hands-on STEM educational programming for students in grades 8-12 at
							our STEM Learning Labs located on-site at select schools, community centers,
							and other flexible spaces. Students can visit the Learning Labs during school
							hours, after school, and in the summer, based on the needs of the individual
							student and the requirements of the student's school. Learning Labs contain
							actual workplace equipment and replicate the corporate culture and business
							practices of our employer partners. This special program offers students the
							rare opportunity to gain valuable career readiness skills while working
							side-by-side with STEM professionals in their school environment.
							<br />
							<a href="">Learn More &gt;</a>
						</p>
                    </div>
                </li>
            </ul>
			<blockquote>
				<p>
					Thank you and everyone from DirectEmployers Foundation for allowing Keshon to be a part of
					the program.  He really enjoyed everything he learned and I think this program was one of
					the best he has ever been a part of. Thank you all for the time, effort and gifts that you
					put into this program. This program will truly make a difference in the lives of all those
					that were able to attend.
				<p>
				<footer>
					<cite>Tyjuana Griffin – STEM YES! Program – Parent</cite>
				</footer>
			</blockquote>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
