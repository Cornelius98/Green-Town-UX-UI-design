<?php 
session_start();
require_once('../classes/products/productPull.class.php');
use ProductManager\ProductPull;
$ProductPull = new ProductPull();
$dropdowns = $ProductPull->Assistants();
$response = [
    "set" =>[ 
        "isFnameSet" =>0,
        "isSnameSet" =>0,
        "isEmailSet" =>0,
        "isApplicationSet" =>0,
        "isAddressSet" =>0,
        "isGenderSet" =>0,
        "isWardSet" =>0,
        "isFileSet"=>0
    ],
    "void" =>[ 
        "isFnameEmpty" =>0,
        "isSnameEmpty" =>0,
        "isEmailEmpty" =>0,
        "isApplicationEmpty" =>0,
        "isAddressEmpty" =>0,
        "isGenderEmpty" =>0,
        "isWardEmpty" =>0,
        "isFileEmpty"=>0
    ],
    "pushedToServer" =>[
        "isFilesPushed"=>0,
        "isDetailsPushed"=>0
    ],
    "success" =>[
        "status" =>0
    ]
];

isset($_POST["fname"])?$response["set"]["isFnameSet"]=200:$response["set"]["isFnameSet"]=404;
isset($_POST["sname"])?$response["set"]["isSnameSet"]=200:$response["set"]["isSnameSet"]=404;
isset($_POST["email"])?$response["set"]["isEmailSet"]=200:$response["set"]["isEmailSet"]=404;
isset($_POST["application"])?$response["set"]["isApplicationSet"]=200:$response["set"]["isApplicationSet"]=404;
isset($_POST["address"])?$response["set"]["isAddressSet"]=200:$response["set"]["isAddressSet"]=404;
isset($_POST["gender"])?$response["set"]["isGenderSet"]=200:$response["set"]["isGenderSet"]=404;
isset($_POST["ward"])?$response["set"]["isWardSet"]=200:$response["set"]["isWardSet"]=404;
isset($_FILES["filesa"])?$response["set"]["isFileSet"]=200:$response["set"]["isFileSet"]=404;

!empty($_POST["fname"])?$response["void"]["isFnameSet"]=200:$response["void"]["isFnameSet"]=404;
!empty($_POST["sname"])?$response["void"]["isSnameSet"]=200:$response["void"]["isSnameSet"]=404;
!empty($_POST["email"])?$response["void"]["isEmailSet"]=200:$response["void"]["isEmailSet"]=404;
!empty($_POST["application"])?$response["void"]["isApplicationSet"]=200:$response["void"]["isApplicationSet"]=404;
!empty($_POST["address"])?$response["void"]["isAddressSet"]=200:$response["void"]["isAddressSet"]=404;
!empty($_POST["gender"])?$response["void"]["isGenderSet"]=200:$response["void"]["isGenderSet"]=404;
!empty($_POST["ward"])?$response["void"]["isWardSet"]=200:$response["void"]["isWardSet"]=404;
!empty($_FILES["filesa"])?$response["void"]["isFileSet"]=200:$response["void"]["isFileSet"]=404;

$o = [];
$o["fname"] = $_POST["fname"];
$o["sname"] = $_POST["sname"];
$o["email"] = $_POST["email"];
$o["application"] = $_POST["application"];
$o["address"] = $_POST["address"];
$o["gender"] = $_POST["gender"];
$o["ward"] = $_POST["ward"];
$o["amount"] = $_POST["amount"];
$o["project"] = $_POST["project"];

if($id = $ProductPull->setCdf($o))
    $response["pushedToServer"]["isDetailsPushed"] = 200;
else $response["pushedToServer"]["isDetailsPushed"] = 404;

$uploads = "../uploads/";
if(isset($_FILES["filesa"]) && is_array($_FILES["filesa"]["type"]) && count($_FILES["filesa"]["type"])>0){
    $num_files = sizeof($_FILES["filesa"]['name']);
        $max = $num_files-1;
        $i = 0;
        if($num_files>0){
            for($i;$i<=$max;$i++){
                $source = $_FILES["filesa"]['tmp_name'][$i];
                $name = $_FILES["filesa"]['name'][$i];
                if(move_uploaded_file($source,$uploads.$name)){
                    if($ProductPull->setCdfFiles($id,$name))
                        $response["pushedToServer"]["isFilesPushed"] = 200;
                }
            }
        }
}else $response["pushedToServer"]["isFilesPushed"] = 202;

if($response["pushedToServer"]["isDetailsPushed"] == 200)
    $response["success"]["status"] = 200;
else $response["success"]["status"] = 404;
echo json_encode($response["success"]);
?>