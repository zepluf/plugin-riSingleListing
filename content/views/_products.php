<?php 

$listing_split = new splitPageResults($listing_sql, MAX_DISPLAY_PRODUCTS_LISTING, 'p.products_id', 'page');
echo \plugins\riPlugin\Plugin::get('riSingleListing.Listing')->render($listing_split);