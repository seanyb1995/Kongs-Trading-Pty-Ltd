<?php

/*
 * function that creates template tag function 'ktpl_product_list'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

if ( !function_exists( 'ktpl_product_list_withfilter' ) ) {
    function ktpl_product_list_withfilter(){
        // set catrgory var fron GET data
        $type = $_GET['type'];

        
        // setup empty var for the final output of our filter form
        $filter_form = "";
        
        /*
        	get a klist of terms for our category taxonomy this will
        	return each term as an array
        */
        $terms_type = get_terms('type');
        // $terms_country = get_terms('country');
        // $terms_meal = get_terms('meal');
        
        /*
        	if there are any terms in category then begin outputting
        	the HTML require for the form to output
        */
        ?>
        <div id="recipe-filter" class="container">
        <div class="row">
        <!-- filter form -->
        <form action='' method='get'>
        <?php
        
        // categories filter
        if($terms_type){
            $filter_form .= "<label for='type'>Filter by Type:</label>";
            $filter_form .= "<select name='type' id='type' onchange='this.form.submit()'>";
                $filter_form .= "<option value=''>All</option>";
                //  loop through each term and output as an <option> in a <select> dropdown
                foreach ($terms_type as $term){
                    /* if the current term/category is active as a filter
                        then make that option selected in the dropdown
                    */
                    $selected = "";
                    if($type == $term->term_id){
                        $selected = "selected";
                    }
                    $filter_form .= "<option value='{$term->term_id}' $selected >{$term->name}</option>";
                }
            $filter_form .= "</select>";
        }
        
        
        // // countries filter 
        // if($terms_country){
        //     $filter_form .= "<label for='country'>Filter by Country:</label>";
        //     $filter_form .= "<select name='country' id='country' onchange='this.form.submit()'>";
        //         $filter_form .= "<option value=''>All</option>";
        //         //  loop through each term and output as an <option> in a <select> dropdown
        //         foreach ($terms_country as $term){
        //             /* if the current term/category is active as a filter
        //                 then make that option selected in the dropdown
        //             */
        //             $selected = "";
        //             if($country == $term->term_id){
        //                 $selected = "selected";
        //             }
        //             $filter_form .= "<option value='{$term->term_id}' $selected >{$term->name}</option>";
        //         }
        //     $filter_form .= "</select>";
        // }
        
                // countries filter 
        // if($terms_meal){
        //     $filter_form .= "<label for='meal'>Filter by Meal:</label>";
        //     $filter_form .= "<select name='meal' id='meal' onchange='this.form.submit()'>";
        //         $filter_form .= "<option value=''>All</option>";
        //         //  loop through each term and output as an <option> in a <select> dropdown
        //         foreach ($terms_meal as $term){
        //             /* if the current term/category is active as a filter
        //                 then make that option selected in the dropdown
        //             */
        //             $selected = "";
        //             if($meal == $term->term_id){
        //                 $selected = "selected";
        //             }
        //             $filter_form .= "<option value='{$term->term_id}' $selected >{$term->name}</option>";
        //         }
        //     $filter_form .= "</select>";
        // }
    
        echo $filter_form;
        ?>
        </form>
        </div>
        
        
        <?php 
        // setup the parameters for the query
        $tax_query = "";
        
        /*
        	if category is not empty, then filter must be active
        	set var $tax_query to be used in out final WP query
        	for the product post
        */
        
        if( $type != "" ){
            $tax_query_type = array(
                array(
                    'taxonomy' => 'type',
                    'field' => 'term_id',
                    'terms' => $type
                )
            );
        }
        
        // if( $country != "" ){
        //     $tax_query_country = array(
        //         array(
        //             'taxonomy' => 'country',
        //             'field' => 'term_id',
        //             'terms' => $country
        //         )
        //     );
        // }
        
        //         if( $meal != "" ){
        //     $tax_query_meal = array(
        //         array(
        //             'taxonomy' => 'meal',
        //             'field' => 'term_id',
        //             'terms' => $meal
        //         )
        //     );
        // }
        
        
        /*
        	if var tax_query is set, create an $args var with 
        	the tax_query parameter set to filter posts by that 
        	taxonomy term.
        */
        
        if($type !=""){
            $args = array(
                'post_type' => 'product',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array(
                    $tax_query_type,
                    // $tax_query_country,
                    // $tax_query_meal
                )
            );
        }else{
            // else, just qyery all posts as normal (no filtering)
            $args = array(
                'post_type' => 'product',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
        }
        
        
        // create the query with WP_Query and store the results in $product
        $product = new WP_Query($args);
        
        
	    if( $product->have_posts() ): ?>
	        <div class="row">
		    <?php while($product->have_posts()): $product->the_post(); ?>
		    
            <a href="<?php the_permalink();?>"> 
            	<?php if( has_post_thumbnail() ): ?>
			    <div class="recipe-individual-container">
				    <div id="recipe-thumbnail" class="col">
				        <?php the_post_thumbnail( array( 250,150) ); ?>
                    </div>
                    <div class="col">
                        <div class="recipe-title">
                            <h3><title="View Product Profile"><?php the_title();?></title></h3>
                        </div>
                    </div>
                </div>
				<?php endif; ?>
				<?php the_excerpt();?>
			</a>
	        <?php endwhile; ?>
	        </div>
	       <?php else: ?>
	           <p>Sorry, we currently have no food products to list</p>
	   <?php endif;
    } //end of function
}

?>