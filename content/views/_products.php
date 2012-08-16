<?php 

$listing_split = new splitPageResults($listing_sql, $max_display, 'p.products_id', 'page');
echo \plugins\riPlugin\Plugin::get('riSingleListing.Listing')->render($listing_split);
