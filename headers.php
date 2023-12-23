<?php 
    ini_set("zlib.output_compression", 9);
    header("Cache-Control: private,no-cache,must-revalidate,must-understand,immutable,max-age=3600,stale-if-error=3600");
    require_once('classes/products/productPull.class.php');
    use ProductManager\ProductPull;
    $ProductPull = new ProductPull();
?>