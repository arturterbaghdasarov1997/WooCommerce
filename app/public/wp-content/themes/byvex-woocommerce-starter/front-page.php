<?php
get_header();
?>
<style>
    .regular-price {
        text-decoration: line-through;
    }
</style>
<div class="container-xxl py-4">
    <?php if (function_exists('wc_get_products')) :
        $args = array(
            'status' => 'publish',
            'limit' => -1, // Display all products
        );
        $products = wc_get_products($args);

        if ($products) : ?>
            <div class="row gy-4">
                <?php foreach ($products as $product) :
                    $is_variable = $product->is_type('variable');
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();
                    $is_on_sale = $product->is_on_sale();
                    if ($is_variable) {
                        // Get variations
                        $variations = $product->get_available_variations();
                        $highest_price = 0;
                        $highest_sale_price = 0;
                        foreach ($variations as $variation) {
                            $variation_price = $variation['display_regular_price'];
                            $variation_sale_price = $variation['display_price'];
                            if ($variation_price > $highest_price) {
                                $highest_price = $variation_price;
                                $highest_sale_price = $variation_sale_price;
                            }
                        }
                        $regular_price = $highest_price;
                        $sale_price = $highest_sale_price;
                    }
                ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="woocommerce-LoopProduct-link">
                            <?php
                            // Display product image
                            echo $product->get_image();
                            ?>
                            <h2><?php echo $product->get_name(); ?></h2>
                            <p>
                                <span class="price">
                                    <span class="regular-price"><?php echo wc_price($regular_price); ?></span>
                                    <?php if ($is_on_sale) : ?>
                                        <span class="sale-price"><?php echo wc_price($sale_price); ?></span>
                                        <span class="sale-badge">Sale</span>
                                    <?php endif; ?>
                                </span>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else :
            get_template_part('template-parts/content-none');
        endif;
    else :
        // Fallback if WooCommerce is not active
        echo 'WooCommerce is not installed or activated.';
    endif;
    ?>
</div>
<?php
get_footer();