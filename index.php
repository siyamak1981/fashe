<?php
include_once 'public/include/config.php';
include 'contoroller/Clayout.php';
include_once 'view/layout/header.php';
$contoroller = @$_GET['c']?$_GET['c']:'index';
$action=@$_GET['a']?$_GET['a']:'index';

if (file_exists('contoroller/C'.$contoroller.'.php')) {
    require_once 'contoroller/C'.$contoroller.'.php';
}
include_once 'view/layout/footer.php';
?>

