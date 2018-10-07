<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kongs_Trading_Pty_Ltd
 */

?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body>
<div class="site-branding">
			<?php
			the_custom_logo();
			?>
</div><!-- .site-branding -->	
<div class="nav-container">
<?php
wp_nav_menu( array(
'before' => '<img></img>',
'container_class' => 'topnav',
'container_id' => 'myTopnav'
) );
?>
<a href="javascript:void(0);" class="hamburger" onclick="responsive()"><i class ="fa fa-bars"></i></a>
</div>
</body>
</html>
