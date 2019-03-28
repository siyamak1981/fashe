<?php
// ob_start();
session_start();

require_once 'admin/model/Muser.php';
$class = new User();
switch ($action) {
    case 'login':
        $login=@$_GET['login'];
        if ($login == "error") {
            echo "error";
        }
        if ($_POST) {
            $data = $_POST['frm'];
            $password = $data['password'];
            $user = $class->select_user($data['username']);
            if ($user['password']==$password){
                $_SESSION['user']=$user['username'] . " " . $user['lastname'];
             
                if (headers_sent()) {
                    die('<script>window.location="admin/index.php?c=index&a=index";</script>');
                }
                 else {
                    header("location:admin/index.php?c=index&a=index");
                    exit();
                }
            } 
            else {
                if (headers_sent()) {
                    die('<script>window.location="index.php?c=user&a=login&login=error";</script>');
                }
                 else {
                    header("location:index.php?c=user&a=login&login=error");
                    exit();
                }
            }
        }
        break;   
}
require_once 'view/' . $contoroller . "/" . $action . '.php';
// // همون صفحه لاگین در ویو هستش
 