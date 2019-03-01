
<?php

include_once 'view/layout/dashboard.php';
if (!isset($_SESSION['login'])){
    // header ("location:./index.php?c=user&a=login&login=error");
    // if (headers_sent()) {
    //                  die('<script>window.location="index.php?c=index&a=index";</script>');
    //              } else {
    //                  header("location:./index.php?c=user&a=login&login=error");
    //                 //  exit();
    //              }
}
include_once '../public/include/config.php';

$contoroller = @$_GET['c'] ? $_GET['c'] : 'index';
$action=@$_GET['a']?$_GET['a']:'index';
if (file_exists('contoroller/C'.$contoroller.'.php')) {
    require_once 'contoroller/C'.$contoroller.'.php';

}

?>
