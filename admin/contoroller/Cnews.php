<?php

require_once 'model/Mnews.php';
$class = new news();
switch ($action) {
    case 'add';
        $newcat_list=$class->newcat_list();
        if ($_POST) {
            $data = $_POST['frm'];
            $class->add_news($data);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=news&a=list";</script>');
            } else {
                header("Location:index.php?c=news&a=list");
                exit();
            }
        }
        break;
    case 'list';
        $select_news = $class->select_news();
        break;

    case 'delete';
        $id = $_GET['id'];
        $row = $class->delete_news($id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=news&a=list";</script>');
        } else {
            header("Location:index.php?c=news&a=list");
            exit();
        }
        break;

    case 'edit';
    @$id=$_GET['id'];
    $edit_news_show=$class->edit_news_show($id);
    $newcat_list=$class->newcat_list();
    if ($_POST) {
        $data=$_POST['frm'];
        $class->edit_news($data,$id);
        // var_dump($id);die;
            if (headers_sent()) {
                die('<script>window.location="index.php?c=news&a=list";</script>');
            } else {
                header("Location:index.php?c=news&a=list");
                exit();
            }
            break;
        }
}

require_once 'view/' . $contoroller . "/" . $action . '.php';
// همون صفحه لاگین در ویو هستش



