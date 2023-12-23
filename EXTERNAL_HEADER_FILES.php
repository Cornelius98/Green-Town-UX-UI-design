<?php 
ini_set("zlib.output_compression", 9);
header("Cache-Control: private,no-cache,must-revalidate,must-understand,immutable,max-age=3600,stale-if-error=3600");
require_once('classes/config/initDBConnection.php');
require_once('classes/file upload/fileupload.class.php');
require_once('classes/errors/errors.class.php');
require_once('classes/products/productPush.class.php');
require_once('classes/products/productPull.class.php');

use DBTemplates\DBConnectionTemplate;
use ErrorManager\AdministratorErros;
use ErrorManager\AdvertiserErros;
use TemplateManager\UserTemplates\UXTemplate;
use ProductManager\ProductPull;

$DBConnectionTemplates = new DBConnectionTemplate();
$UserErrorsPool = new AdvertiserErros();
$AdminiErrorsPool = new AdministratorErros();
$UXviewTemplate = new UXTemplate();
$FileUploadHandler = new FileUploadHandler();
$ProductPull = new ProductPull();

?>