<?php 
require_once 'model/Mnewcat.php';
$class = new newcat();
switch ($action) {
    case 'add':
        $newmaincat_list=@$class->newmaincat_list();
        if ($_POST) {
            $data = $_POST['frm'];
            $class->add_newcat($data);
            if (headers_sent()) {
                die('<script>window.location="index.php?c=newcat&a=list";</script>');
            } else {
                header("Location:index.php?c=newcat&a=list");
                exit();
            }
            break;
        }

    case 'list':
        $newcat_list=$class->newcat_list();
        break;
    
    case 'delete':
        $id=$_GET['id'];
        $class->newcat_delete($id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=newcat&a=list";</script>');
        } else {
            header("Location:index.php?c=newcat&a=list");
            exit();
        }
        break;
        
    case 'edit':
        $id=@$_GET['id'];
        $newcat_showedit=$class->newcat_showedit($id);
        $newmaincat_list=@$class->newmaincat_list();
        if($_POST){
        $data = $_POST['frm'];
        $class->newcat_edit($data,$id);
        if (headers_sent()) {
            die('<script>window.location="index.php?c=newcat&a=list";</script>');
        } else {
            header("Location:index.php?c=newcat&a=list");
            exit();
        }
        break;
        }
    } 

require_once 'view/' . $contoroller . "/" . $action . '.php';
    ?>