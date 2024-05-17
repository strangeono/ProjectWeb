<?php

// $content = file_get_contents('products_db.php');
require('product_db.php');

$id = $_GET['product_id'];

$title = get_product_title($id);
$img_url = get_img_url($id);
$text = get_text($id);

require('content\productcontent.php');
?>

