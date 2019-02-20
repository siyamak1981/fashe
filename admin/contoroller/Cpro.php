<?php

require_once 'model/Mpro.php';
$class = new pro();
switch ($action) {
    case 'list':
        $pro = $class->pro_list();
        break;
    case 'add':
        $res = $class->procat_list();
        if ($_POST) {
            $data = $_POST['frm'];
            $file = $_FILES['image1'];
            $array = explode(".", $file['name']);
            $newname = rand() . "." . end($array);
            $from = $file["tmp_name"];
            $to = "../public/uploader/" . $newname;
            move_uploaded_file($from, $to);

            $class->pro_add($data, $to);


            if (headers_sent()) {
                die('<script>window.location="index.php?c=pro&a=list";</script>');
            } else {
                header("Location:index.php?c=pro&a=list");
                exit();
            }
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $class->pro_delete($id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=pro&a=list";</script>');
        } else {
            header("Location:index.php?c=pro&a=list");
            exit();
        }
        break;
    case 'edit':
        $id=$_GET['id'];
        $results=$class->pro_showEdit($id);
        $res=$class->procat_list();

        if ($_POST) {
            $data = $_POST['frm'];
            $class->pro_edit($data, $id);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=pro&a=list";</script>');
            } else {
                header("Location:index.php?c=pro&a=list");
                exit();
            }
            break;
        }
}

require_once 'view/' . $contoroller . "/" . $action . '.php';
?>