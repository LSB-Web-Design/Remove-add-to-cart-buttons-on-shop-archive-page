/*=======================================*/
/** Remove add to cart buttons on shop archive page **/
/** https://isabelcastillo.com/remove-add-to-cart-buttons-woocommerce **/
/*=======================================*/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
