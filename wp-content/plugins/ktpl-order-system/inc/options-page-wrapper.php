<div class="wrap">
    
    <h1 class="wp-heading-inline"><?php_e( 'Customer Order', 'ktpl_customer_order' ); ?></h1>
    
    <form method="post" action="options.php">
        <?php
            global $wpdb;
            $table_name = $wpdb->prefix . "ktpl_customer_order";
            $rows = $wpdb->get_results("SELECT * from $table_name");
        ?>
        
        <table class="widefat">
            <thead>
                <tr>
                    <th><?php esc_attr_e( 'ID', 'ktpl_customer_order' ); ?></th>
                    <th><?php esc_attr_e( 'Customer ID', 'ktpl_customer_order' ); ?></th>
                    <th><?php esc_attr_e( 'Name', 'ktpl_customer_order' ); ?></th>
                     <th><?php esc_attr_e( 'Order', 'ktpl_customer_order' ); ?></th>
                     <th><?php esc_attr_e( 'Cost', 'ktpl_customer_order' ); ?></th>
                    <th><?php esc_attr_e( 'Email', 'ktpl_customer_order' ); ?></th>
                    <th><?php esc_attr_e( 'Number', 'ktpl_customer_order' ); ?></th>
                </tr>
            </thead>
            
        <?php foreach ($rows as $row): ?>

        <tr>
          <td><?php esc_attr_e( $row->id, 'ktpl_customer_order' ); ?></td>
          <td><?php esc_attr_e( $row->customer_id, 'ktpl_customer_order' ); ?></td>
          <td><?php esc_attr_e( $row->name, 'ktpl_customer_order' ); ?></td>
            <td><?php esc_attr_e( $row->customer_order, 'ktpl_customer_order' ); ?></td>
            <td><?php esc_attr_e( $row->cost, 'ktpl_customer_order' ); ?></td>
          <td><?php esc_attr_e( $row->email, 'ktpl_customer_order' ); ?></td>
          <td><?php esc_attr_e( $row->phone_number, 'ktpl_customer_order' ); ?></td>
        </tr>
        
        <?php endforeach; ?>
        
        </table>
    </form>
    
</div><!--/.wrap-->