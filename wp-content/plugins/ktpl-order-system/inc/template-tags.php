<?php
/* 
 * function that creates template tag function 'mb_customer_add_order_button'
 * this function simply outputs basic HTML for a button which
 * adds the menu item to the customer order 
*/
session_start();


if( ! function_exists( 'ktpl_customer_add_order_button' ) ) {
    function ktpl_customer_add_order_button($post_id) {
    global $customer_order_plugin_root;
    ?>
    <!-- add to order button -->
    <form class="s-p-form" action="<?php echo $customer_order_plugin_root_url; ?>/wp-content/plugins/ktpl-order-system/inc/customer-order-add.php" method="post">
        <input type="hidden" name="item" value="<?php echo get_the_title() ?>">
        <input type="hidden" name="price" value="<?php echo get_field('price') ?>">
        <input type="hidden" name="referer" value="<?php echo get_permalink() ?>">
        <input type="submit" name="submit" class="button-ato" value="Add To Order">
    </form>
    <?php

    }
}

if ( !function_exists( 'mb_order_docket' ) ) {
    function mb_order_docket() {
            
            $orders = ($_SESSION['order']);
            $length = count($orders);
            $total_price = 0;
            
            ?>
            
            
         
            <!-- submit order button -->
            
            
            
<div class="container">
  <div class="row">
     <div class="col">
       <div class="row">
         <div class="col">
           <div class="triangle-container-up">
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
             <div class="triangleup"></div>
           </div>
        </div>
       </div>
       <div class="row">
             <div class="col">
               <div class="docket">
                   
                 <h1>ORDER DETAILS</h1>
                 
             
                 
                 
                 
            <?php
            if  ( isset($_SESSION['order'])) {
        
            echo "<table class=order-detail>";
            echo "<tr class=order-container>";
        
            
            foreach( $orders as $order): ?>
                <?php
                $total_price = $total_price + $order['price'];
                ?>
                <tr class="product-row" >
                    <td class="col-list1"><?php echo $order['name']; ?></td>
                    
                    <!--<td class="col-list2"></td>-->
                    
                    <td class="col-list2">$<?php echo $order['price']; ?></td>
                </tr>    

            <?php endforeach;
                   
                echo "<th class=col-list1>Total</th>";
                echo "<th class=col-list2>$$total_price</th>";
            echo "</tr>";
            echo "</table>";
            
            }     
        
            echo "</container>";
            echo "</table>";
        
        
        
            ?>
                 
                 
                 
                 <div class="line"></div>
          
            <form class="submit-button" action="<?php echo $customer_order_plugin_root_url; ?>/wp-content/plugins/ktpl-order-system/inc/customer-submit-order.php" method="post">
                <input type="hidden" name="referer" value="<?php echo get_permalink() ?>">
                <input type="hidden" name="total_price" value="<?php echo $total_price ?>">
                <input type="submit" name="submit" class="buttonconfirm" value="Confirm Order">
            <!--<button class="tagline">Test</button>-->
            </form>
              
               </div>
           </div>
       </div>
        <div class="row">
         <div class="col">
           <div class="triangle-container-down">
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
             <div class="triangledown"></div>
           </div>
        </div>
       </div>
        </div>
  </div>
</div>
            
            
            
            
            
            
            
            
    
       
        
        
        
        
        
        
        
        
        
        
        
        <?php
    }
}

?>