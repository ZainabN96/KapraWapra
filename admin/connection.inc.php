<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/TheLinenCraft/');
define('SITE_PATH','');

define('LOGO_SERVER_PATH',SERVER_PATH.'/media/');
define('LOGO_SITE_PATH',SITE_PATH.'../media/');

define('CAT_SERVER_PATH',SERVER_PATH.'/media/category');
define('CAT_SITE_PATH',SITE_PATH.'../media/category');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/img/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'../img/products/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'/img/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'../media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'/media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'../media/banner/');

define('SHIPROCKET_TOKEN_EMAIL','gmail');
define('SHIPROCKET_TOKEN_PASSWORD','password');

?>