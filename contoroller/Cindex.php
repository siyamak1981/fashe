<?php
require_once 'model/Mindex.php';
// require_once 'model/Mproduct.php';
$class =new main();
$menu_list=$class->menu_list();
$news_list=$class->news_list();


require_once 'view/index/index.php';
// require_once 'view/index/product.php';

?>