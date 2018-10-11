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
				       <a href=# id="prev"></a>
				       </div>
				    </div>
				    <div class="col-xl-">
				      <div class="cycle-slideshow" 
					    data-cycle-timeout="2000"
					    data-cycle-pause-on-hover="true"
					    data-cycle-prev="#prev"
					    data-cycle-next="#next"
					    >
						<!-- empty element for overlay -->
    					<div class="cycle-overlay"></div>
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
				       <a href=# id="next"></a>
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

if ( ! function_exists( 'slide_show_product' ) ) {
    function slide_show_product() {
    // get ingrients posts from database

    $tax_query = array(
        array(
            'taxonomy' => 'advertisement',
            'field' => 'term_id',
            'terms' => 10
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
				       <a href=# id="prev"></a>
				       </div>
				    </div>
				    <div class="col-xl-">
					<div class="cycle-slideshow" 
					    data-cycle-timeout="2000"
					    data-cycle-pause-on-hover="true"
					    data-cycle-prev="#prev"
					    data-cycle-next="#next"
					    >
						<!-- empty element for overlay -->
    					<div class="cycle-overlay"></div>
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
				       <a href=# id="next"></a>
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
		        ?>
				<div class="container">
				  <div class="row">
				    <div class="col-sm">
				      <div class="center">
				       <a href=# id="prev"></a>
				       </div>
				    </div>
				    <div class="col-xl-">
					<div class="cycle-slideshow" 
					    data-cycle-timeout="2000"
					    data-cycle-pause-on-hover="true"
					    data-cycle-prev="#prev"
					    data-cycle-next="#next"
					    >
						<!-- empty element for overlay -->
    					<div class="cycle-overlay"></div>
		        <?php
			    while($slideshow->have_posts()) {
			        $slideshow->the_post(); 
			        ?>
	                				<?php if( has_post_thumbnail() ): ?>
	            	    				    <?php the_post_thumbnail(array(
	            	    				    )); ?>
	                				<?php endif; ?>
		        <?php
			    }
			    ?>
				</div>
				    </div>
				    <div class="col-sm">
				       <a href=# id="next"></a>
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