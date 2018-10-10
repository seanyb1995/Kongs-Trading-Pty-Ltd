<?php
/**
 * Template Name: Products
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
				<?php slide_show_product(); ?>
				<?php ktpl_recipe_list_withfilter(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
