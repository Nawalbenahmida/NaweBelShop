Content-type: text/html; charset=utf-8
From: <?php shopp( 'purchase.email-from' ); ?>
To: <?php shopp( 'purchase.email-to' ); ?>
Subject: <?php shopp( 'purchase.email-subject' ); ?>

<html>
	<div id="header">
		<h1><?php shopp( 'storefront.business-name' ); ?></h1>
		<h2><?php Shopp::_e( 'Order Shipment Notification' ); ?> <?php shopp( 'purchase.id' ); ?></h2>
	</div>
	<div id="body">
		<div id="receipt" class="shopp">
			<table class="labels">
				<tr>
					<td>
						<fieldset class="shipping">
							<legend><?php Shopp::_e( 'Ship to' ); ?></legend>
							<address><?php shopp( 'purchase.shipname' ); ?><br /><br />
								<?php shopp( 'purchase.shipaddress' ); ?><br />
								<?php shopp( 'purchase.shipxaddress' ); ?>
								<?php shopp( 'purchase.shipcity' ); ?>, <?php shopp( 'purchase.shipstate' ); ?> <?php shopp( 'purchase.shippostcode' ); ?><br />
								<?php shopp( 'purchase.shipcountry' ); ?></address>
						</fieldset>
					</td>
					<td>
						<fieldset class="shipping">
							<legend><?php Shopp::_e( 'Shipment' ); ?></legend>
							<table class="transaction">
								<tr>
									<th><?php Shopp::_e( 'Tracking Number:' ); ?></th>
									<td><?php shopp( 'purchase.email-event', 'name=tracking&link=on' ); ?></td>
								</tr>
								<tr>
									<th><?php Shopp::_e( 'Carrier:' ); ?></th>
									<td><?php shopp( 'purchase.email-event', 'name=carrier' ); ?></td>
								</tr>
								<tr>
									<th><?php Shopp::_e( 'Order Date:' ); ?></th>
									<td><?php shopp( 'purchase.date' ); ?></td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
			</table>
			<?php if ( shopp( 'purchase.hasitems' ) ) : ?>
				<table class="order widefat">
					<thead>
						<tr>
							<th scope="col" class="item"><?php Shopp::_e( 'Items' ); ?></th>
							<th scope="col"><?php Shopp::_e( 'Quantity' ); ?></th>
						</tr>
					</thead>

					<?php while ( shopp( 'purchase.items' ) ) : ?>
						<tr>
							<td>
								<?php shopp( 'purchase.item-name' ); ?><?php shopp( 'purchase.item-options', 'before= – ' ); ?><br />
								<?php shopp( 'purchase.item-sku' ); ?><br />
								<?php shopp( 'purchase.item-addons-list' ); ?>
							</td>
							<td><?php shopp( 'purchase.item-quantity' ); ?></td>
						</tr>
					<?php endwhile; ?>

				</table>
			<?php endif; ?>
		</div>
	</div>
</html>