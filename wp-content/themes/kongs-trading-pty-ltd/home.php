<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kongs_Trading_Pty_Ltd
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<?php slide_show(); ?>
				<?php ktpl_recipe_list_recommended(); ?>
				<div class="container">
					<div class="row">
						<div class="col">
							<?php
								while ( have_posts() ) :
									the_post();
		
										get_template_part( 'template-parts/content', 'page' );
			
											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
	
								endwhile; // End of the loop.
							?>
						</div>
						<div class="col">
						</div>
					</div>
				</div>
				<div id="map" class="container">
					<div class="row">
						<div class="col">
							<h1>Locations</h1>
							<iframe src="https://www.google.com/maps/d/embed?mid=1UJZT7FyTS0pD7NSoN08JRXdvmTwlvE2U&hl=en" width="1140" height="750"></iframe>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
