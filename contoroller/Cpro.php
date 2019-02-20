<?php

require_once 'admin/model/Mpro.php';
$pro = new pro();
switch ($action) {
    case 'list':
        $result = $pro->pro_list();
        break;
    case 'detail':
        $id = $_GET['id'];
        $result = $pro->pro_showEdit($id);
        break;
}

require_once 'view/' . $contoroller . "/" . $action . '.php';
?>