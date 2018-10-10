<?php
/* 
 * function that creates template tag function ''
 * this function simply outputs basic HTML for a button which
 * adds the menu item to the customer order 
*/

if ( ! function_exists( 'slide_show_recipe' ) ) {
    function slide_show_recipe() {
    // get ingrients posts from database

    $tax_query = array(
        array(
            'taxonomy' => 'advertisement',
            'field' => 'term_id',
            'terms' => 11
        )
        
      );
    $args = array(
        'post_type' => 'slideshow',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query
        );
    $slideshow = new WP_Query($args);
    
		    if( $slideshow->have_posts() ){
		        ?>
				<div class="container">
				  <div class="row">
				    <div class="col-sm">
				      <div class="center">
				       <a href=# id="prev"><i class="fa fa-chevron-left"></i></a>
				       </div>
				    </div>
				    <div class="col-xl-">
				      <div class="cycle-slideshow"
				    data-cycle-fx="scrollHorz"
				    data-cycle-timeout="0"
				    data-cycle-prev="#prev"
				    data-cycle-next="#next"
				    >
		        <?php
			    while($slideshow->have_posts()) {
			        $slideshow->the_post(); 
			        ?>
	                				<?php if( has_post_thumbnail() ): ?>
	            	    				    <?php the_post_thumbnail(); ?>
	                				<?php endif; ?>
		        <?php
			    }
			    ?>
				</div>
				    </div>
				    <div class="col-sm">
				       <a href=# id="next"><i class="fa fa-chevron-right"></i></a>
				    </div>
				  </div>
				  </div>
				<?php
	    	}else{
    	    ?>
	        	<p>Sorry, we currently have no food products to list</p>
		    <?php
        }
    }
}

?>