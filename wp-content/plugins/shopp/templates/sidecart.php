<?php
/**
 ** WARNING! DO NOT EDIT!
 **
 ** These templates are part of the core Shopp files
 ** and will be overwritten when upgrading Shopp.
 **
 ** For editable templates, setup Shopp theme templates:
 ** http://shopplugin.com/docs/the-catalog/theme-templates/
 **
 **/
?>

<div id="shopp-cart-ajax">
	<?php if ( shopp( 'cart.hasitems' ) ) : ?>
		<p class="status">
			<span id="shopp-sidecart-items"><?php shopp( 'cart.totalitems' ); ?></span> <strong><?php Shopp::_e( 'Articles' ); ?></strong><br />
			<span id="shopp-sidecart-total" class="money"><?php shopp( 'cart.total' ); ?></span> <strong><?php Shopp::_e( 'Total' ); ?></strong>
		</p>
		<ul>
			<li><a href="<?php shopp( 'cart.url' ); ?>"><?php Shopp::_e( 'Mon panier' ); ?></a></li>
			<li><a href="<?php shopp( 'checkout.url' ); ?>"><?php Shopp::_e( 'Procéder au paiement ' ); ?></a></li>
		</ul>
	<?php else : ?>
		<p class="status notice"><?php Shopp::_e( 'Votre panier est vide' ); ?></p>
	<?php endif; ?>
</div>
