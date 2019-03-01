<?php
 session_start();
require_once 'model/Muser.php';
$class = new user();
switch ($action) {
    case 'login':
        @$login = $_GET['login'];
        if ($login == "error") {
            echo "error";
        }
        if ($_POST) {
            $data = $_POST['frm'];
            $password = sha1($data['password']);
            $user = $class->select_user($data['username']);
            if ($user['password'] == $data['password']) {

                $_SESSION['user'] = $user['username'] . " " . $user['lastname'];


                if (headers_sent()) {
                    die('<script>window.location="./admin/index.php?c=index&a=index";</script>');
                } else {
                    header("location:index.php?c=user&a=login&login=error");
                    exit();
                }
            }
        }
        break;

    case logout;
        break;
}



require_once 'view/' . $contoroller . "/" . $action . '.php';
// // همون صفحه لاگین در ویو هستش
?>
<?php
