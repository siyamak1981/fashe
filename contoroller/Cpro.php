<?php

require_once 'admin/model/Mpro.php';
$pro = new pro();
switch ($action) {
    case 'list':
    require_once 'admin/model/Mprocat.php';
    $procat = new procat;
   
    $res=$procat->procat_list();
    if(isset($_GET['procat'])){
        $cat_id = $_GET['procat'];
        $result = $pro->pro_list_catid($cat_id);
    }
    else {
        $result = $pro->pro_list();
    }
      
        break;
    case 'detail':
        $id = $_GET['id'];
        $result = $pro->pro_showEdit($id);
        break;
}

require_once 'view/' . $contoroller . "/" . $action . '.php';
?>