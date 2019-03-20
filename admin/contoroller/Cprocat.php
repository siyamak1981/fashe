<?php

require_once 'model/Mprocat.php';
$class = new procat();
switch ($action) {
    case 'list':
        $procat = $class->procat_list();
        break;
    case 'add':
        $res = $class->promaincat_list();
        if ($_POST) {
            $data = $_POST['frm'];
            $class->procat_add($data);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=procat&a=list";</script>');
            } else {
                header("Location:index.php?c=procat&a=list");
                exit();
            }
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $class->procat_delete($id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=procat&a=list";</script>');
        } else {
            header("Location:index.php?c=procat&a=list");
            exit();
        }
        break;
    case 'edit':
        $id = $_GET['id'];
        $results = $class->procat_showEdit($id);
        $res = $class->promaincat_list();
        if ($_POST) {
            $data = $_POST['frm'];
            $class->procat_edit($data, $id);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=procat&a=list";</script>');
            } else {
                header("Location:index.php?c=procat&a=list");
                exit();
            }
            break;
        }
}

require_once 'view/' . $contoroller . "/" . $action . '.php';
 