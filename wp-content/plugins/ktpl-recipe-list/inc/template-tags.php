<?php

/*
 * function that creates template tag function 'ktpl_recipe_list'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

if ( !function_exists( 'ktpl_recipe_list_withfilter' ) ) {
    function ktpl_recipe_list_withfilter(){
        // set catrgory var fron GET data
        $category = $_GET['category'];
        $country = $_GET['country'];
        
        // setup empty var for the final output of our filter form
        $filter_form = "";
        
        /*
        	get a klist of terms for our category taxonomy this will
        	return each term as an array
        */
        $terms_category = get_terms('category');
        $terms_country = get_terms('country');
        
        //print_r($terms_category);
        
        
        /*
        	if there are any terms in category then begin outputting
        	the HTML require for the form to output
        */
        ?>
        <div class="container">
            <h3>Recommended Recipe</h3>
        
        
        <!-- filter form -->
        <form action='' method='get'>
        <?php
        
        // categories filter
        if($terms_category){
            $filter_form .= "<label for='category'>Filter by Category:</label>";
            $filter_form .= "<select name='category' id='category' onchange='this.form.submit()'>";
                $filter_form .= "<option value=''>All</option>";
                //  loop through each term and output as an <option> in a <select> dropdown
                foreach ($terms_category as $term){
                    /* if the current term/category is active as a filter
                        then make that option selected in the dropdown
                    */
                    $selected = "";
                    if($category == $term->term_id){
                        $selected = "selected";
                    }
                    $filter_form .= "<option value='{$term->term_id}' $selected >{$term->name}</option>";
                }
            $filter_form .= "</select>";
        }
        
        
        // countries filter 
        if($terms_country){
            $filter_form .= "<label for='country'>Filter by Country:</label>";
            $filter_form .= "<select name='country' id='category' onchange='this.form.submit()'>";
                $filter_form .= "<option value=''>All</option>";
                //  loop through each term and output as an <option> in a <select> dropdown
                foreach ($terms_country as $term){
                    /* if the current term/category is active as a filter
                        then make that option selected in the dropdown
                    */
                    $selected = "";
                    if($country == $term->term_id){
                        $selected = "selected";
                    }
                    $filter_form .= "<option value='{$term->term_id}' $selected >{$term->name}</option>";
                }
            $filter_form .= "</select>";
        }
    
        echo $filter_form;
        ?>
        </form>
        
        
        <?php 
        // setup the parameters for the query
        $tax_query = "";
        
        /*
        	if category is not empty, then filter must be active
        	set var $tax_query to be used in out final WP query
        	for the product post
        */
        
        if( $category != "" ){
            $tax_query_category = array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $category
                )
            );
        }
        
        if( $country != "" ){
            $tax_query_country = array(
                array(
                    'taxonomy' => 'country',
                    'field' => 'term_id',
                    'terms' => $country
                )
            );
        }
        
        
        /*
        	if var tax_query is set, create an $args var with 
        	the tax_query parameter set to filter posts by that 
        	taxonomy term.
        */
        
        if($category !="" || $country !=""){
            $args = array(
                'post_type' => 'recipe',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array(
                    $tax_query_category,
                    $tax_query_country
                )
            );
        }else{
            // else, just qyery all posts as normal (no filtering)
            $args = array(
                'post_type' => 'recipe',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
        }
        
        
        // create the query with WP_Query and store the results in $recipe
        $recipe = new WP_Query($args);
        
        
	    if( $recipe->have_posts() ): ?>
	        <div class="row">
		    <?php while($recipe->have_posts()): $recipe->the_post(); ?>
		    
            <a href="<?php the_permalink();?>"> 
            	<?php if( has_post_thumbnail() ): ?>
			    <div class="recipe-individual-container">
				    <div id="recipe-thumbnail" class="col">
				        <?php the_post_thumbnail( array( 250,150) ); ?>
                    </div>
                    <div class="col">
                        <div class="recipe-title">
                            <h3><title="View Food Profile"><?php the_title();?></title></h3>
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

if ( ! function_exists( 'ktpl_recipe_list_recommended' ) ) {
    function ktpl_recipe_list_recommended() {
    // get ingrients posts from database

    ?>
    <div class="container">
    <h3>Recommended Recipe</h3>
    <?php

    $tax_query = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => 15
        )

      );
    $args = array(
        'post_type' => 'recipe',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query
        );

    $recipe_recommended = new WP_Query($args);

        if( $recipe_recommended->have_posts() ): ?>
        <div class="row">
      <?php while($recipe_recommended->have_posts()): $recipe_recommended->the_post(); ?>

          <a href="<?php the_permalink();?>">
            <?php if( has_post_thumbnail() ): ?>
        <div class="recipe-individual-container">
          <div id="recipe-thumbnail" class="col">
              <?php the_post_thumbnail( array( 250,150) ); ?>
                  </div>
                  <div class="col">
                      <div class="recipe-title">
                          <h3><title="View Food Profile"><?php the_title();?></title></h3>
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