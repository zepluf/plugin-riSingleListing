<?php
namespace plugins\riSingleListing;

class Listing{
	public function render($listing_split, $template = 'riSingleListing::_product.php'){        
        if ($listing_split->number_of_rows > 0) {
            $products = $db->Execute($listing_split->sql_query);
            while (!$products->EOF) {        
                $product = $products->fields;
                $product = array_merger($product,
                    array(
            			'products_display_price' => zen_get_products_display_price($products->fields['products_id']),    			
            			'images_width' => $images_width,
            			'images_height' => $images_height,
            			'products_link' => zen_href_link(zen_get_info_page($product['products_id']), 'products_id=' . $product['products_id'])
                    )
                );
                $riview->render($template, $product);
                $products->MoveNext();
            }
        }
	}
}