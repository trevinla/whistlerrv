<?php

/**
 * template extra cart
 */

?>

<tr class="hb_checkout_item package" data-cart-id="<?php echo esc_attr( $cart_id ) ?>" data-parent-id="<?php echo esc_attr( $package->parent_id ) ?>">

	<td colspan="<?php echo is_hb_cart() ? 2 : 1 ?>" class="hb_addition_no">
		<?php if( is_hb_cart() ): ?>
			<a href="#" class="hb_package_remove" data-cart-id="<?php echo esc_attr( $cart_id ) ?>" data-parent-id="<?php echo esc_attr( $package->parent_id ) ?>"><i class="fa fa-times"></i></a>
		<?php endif; ?>
	</td>

	<td class="hb_addition_quantity">
		<?php if( $input = apply_filters( 'tp_hb_extra_cart_input', $package->product_data->respondent ) ): ?>
			<input type="number" min="1" value="<?php echo esc_attr( $package->quantity ); ?>" name="hotel_booking_cart[<?php echo esc_attr( $cart_id ); ?>]"/>
		<?php else: ?>
			<?php printf( '%s', $package->quantity ) ?>
			<input type="hidden" value="<?php echo esc_attr( $package->quantity ); ?>" name="hotel_booking_cart[<?php echo esc_attr( $cart_id ); ?>]"/>
		<?php endif; ?>
	</td>

	<td colspan="3" class="hb_addition_name">
		<?php printf( '%s', $package->product_data->title ) ?>
	</td>

	<td class="hb_gross_total" style="text-align: right;">
		<?php echo hb_format_price( $package->amount_exclude_tax ) ?>
	</td>

</tr>
