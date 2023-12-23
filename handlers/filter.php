<?php 
session_start();
require_once('../classes/products/productPull.class.php');
use ProductManager\ProductPull;
$ProductPull = new ProductPull();
$dropdowns = $ProductPull->Assistants();
$response = [
    "success" =>[
        "status" =>0,
        "results"=>[]
    ]
];
$year = $_POST["year"];
$app = $_POST["app"];
$gender = $_POST["gender"];
$o = $ProductPull->getCrawler($year,$app,$gender);
$response["success"]["results"] = $o;
if(is_array($response["success"]["results"]) && !empty($response["success"]["results"]))
    $response["success"]["status"] = 200;
else $response["success"]["status"] = 404;
echo json_encode($response["success"]);
?>