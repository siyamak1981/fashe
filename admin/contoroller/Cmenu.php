<?php
include "model/Mmenu.php";
$class = new menu();
switch ($action) {
    case 'add';
        if ($_POST) {
            $data = $_POST['frm'];
            $menu = $class->add_menu($data);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=menu&a=list";</script>');
            } else {
                header("Location:index.php?c=menu&a=list");
                exit();
            }
            break;
        }
        case 'list':
        $row=$class->list_menu();
        break;
}
require_once 'view/' . $contoroller . "/" . $action . '.php';
 