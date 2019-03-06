<?php
require_once 'admin/model/Mindex.php';

$class =new main();
$menu_list=$class->menu_list();
$news_list=$class->news_list();


require_once 'view/index/index.php';


?>
