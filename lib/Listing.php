<?php
namespace plugins\riSingleListing;

class Listing{
	public function render($listing_split, $template = 'riSingleListing::_product.php'){  
	    global $db, $riview;      
	    $content = '';
        if ($listing_split->number_of_rows > 0) {
            $products = $db->Execute($listing_split->sql_query);
            while (!$products->EOF) {        
                $product = $products->fields;
                $product = array_merge($product,
                    array(
            			'products_display_price' => zen_get_products_display_price($products->fields['products_id']),    			            			
            			'products_link' => zen_href_link(zen_get_info_page($product['products_id']), 'products_id=' . $product['products_id'])                        
                    )
                );
                $content .= $riview->render($template, $product);
                $products->MoveNext();
            }
        }
        return $content;
	}
}