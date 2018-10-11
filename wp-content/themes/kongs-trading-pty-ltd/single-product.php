<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kongs_Trading_Pty_Ltd
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php while ( have_posts() ) :the_post(); ?>
			<div class="container">
			  <div class="row">
			    <div class="col">
			      <h1 id="single-product-title"><?php the_title(); ?></h1>
			    </div>
			  </div>
			</div>
			<div class="container-fluid">
			  <div id="product-price-container" class="row">
			      <div id="main-image" class="col">
					<?php the_post_thumbnail( array( 600,450) ); ?>
			          <div id=adv-custom-pager class="center external"></div>
			        </div>
			      <div id="order-col" class="col">
			        <div class="box">
			          <div id="add-to-order" class="container">
			            <div id="price" class="row">
			              <div class="col">
			              <h1>Price</h1>
			              </div>
			            </div>
			              <div id="dollar-value" class="row">
			                <div class="col">
			                  <h1><?php echo get_field('price') ?></h1>
			                </div>
			            </div>
			            <div id="add" class="row">
			              <div id="addcol" class="col">
			              <?php ktpl_customer_add_order_button( get_the_ID() ); ?>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			</div>
		<div id="product-details" class="container-fluid">
		  <div class="row">
		    <div class="col">
		    </div>
		    <div class="col">
		    <h1>Product Details</h1>
		    <p><?php the_content(); ?></p>
		  </div>
		    <div class="col">
		    </div>
		  </div>
		</div>
		<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();



	

