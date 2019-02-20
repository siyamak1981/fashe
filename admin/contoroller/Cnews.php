<?php

require_once 'model/Mnews.php';
$class = new news();
switch ($action) {
    case 'add';
    if ($_POST) {
        $data = $_POST['frm'];
        $class->add_news($data);

    }
    break;
case 'list';
$row = $class->select_news();
break;

case 'delete';
$id = $_GET['id'];
$row = $class->delete_news($id);
break;
case 'show_edit';

$row = $class->edit_news_show($id);
break;

case 'edit';
$id = @$_GET['id'];
$id =@$_GET['data'];
$row =@$class->edit_news($id,$data);
break;
}



require_once "view/$contoroller/$action.php";
// همون صفحه لاگین در ویو هستش
?>
