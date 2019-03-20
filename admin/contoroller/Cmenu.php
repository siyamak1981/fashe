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
    $sub = $class->submenu();
        $results=$class->list_menu();
        break;
     
        case 'delete':
        $id=$_GET['id'];
        $class->delete_menu($id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=menu&a=list";</script>');
        } else {
            header("Location:index.php?c=menu&a=list");
            exit();
        }
        break;

        case 'edit':
        $id=$_GET['id'];
        $res=$class->show_edit_menu($id);
        $sub = $class->submenu();
        if($_POST){
            $data=$_POST['frm'];
            $class->edit_menu($id,$data);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=menu&a=list";</script>');
            } else {
                header("Location:index.php?c=menu&a=list");
                exit();
            }
            break;
        }
}
require_once 'view/' . $contoroller . "/" . $action . '.php';


 