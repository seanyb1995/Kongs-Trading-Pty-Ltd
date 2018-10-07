<?php
/* 
 * function that creates template tag function ''
 * this function simply outputs basic HTML for a button which
 * adds the menu item to the customer order 
*/

if ( ! function_exists( 'slide_show' ) ) {
    function slide_show() {
    // get ingrients posts from database
    $args = array(
        'post_type' => 'slideshow',
        'orderby' => 'menu_order',
        'order' => 'ASC'
        );
    $slideshow = new WP_Query($args);
    
		    if( $slideshow->have_posts() ){
			    while($slideshow->have_posts()) {
			        $slideshow->the_post(); 
			        ?>
	                				<?php if( has_post_thumbnail() ): ?>
	            	    				<div><?php the_post_thumbnail(); ?></div>
	                				<?php endif; ?>
		        <?php
			    }
	    	}else{
    	    ?>
	        	<p>Sorry, we currently have no food products to list</p>
		    <?php
        }
    }
}
?>