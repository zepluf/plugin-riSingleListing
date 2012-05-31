<div class="item-product-listing">
	<span class="sale"></span> 
		<a href="<?php echo $products_link?>">
			<?php echo zen_image(DIR_WS_IMAGES . $products_image, $products_name, $images_width, $images_height, 'class="listingProductImage"');?>
		</a>
	<div class="item-title">
		<a href="<?php echo $products_link?>"><?php echo $products_name?></a>
	</div>
	<div class="item-id"><?php echo $products_model?></div>
	<div class="item-price">
		<?php echo $products_display_price?>
	</div>
</div>