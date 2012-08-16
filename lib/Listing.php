<?php
namespace plugins\riSingleListing;

class Listing{
	public function render($listing_split, $template = 'riSingleListing::_product.php'){
	    global $db, $riview;      
	    $content = '';
        
        $products = $this->getProducts($listing_split);
        while (foreach $products as $product) {                    
            $content .= $riview->render($template, $product);
            $products->MoveNext();
        }
        
        return $content;
	}	
}