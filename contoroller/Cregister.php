<?php

require_once 'admin/model/Mregister.php';
$class = new register();
if(isset($_POST['btn'])){
    $data=$_POST['frm'];

    $class->register_add($data);

}

require_once 'view/register.php';
?>
<?php
// require_once 'admin/model/Mregister.php';
// $class = new register();
// switch ($action) {
//     case 'register';
//         if($_POST) {
//             $data=$_POST['frm'];
//             $class->register_add($data);
//             // var_dump($data);
//             die;
//         }
//         break;
// }
// // require_once "view/user/register.php";
// require_once 'view/' . $contoroller . "/" . $action . '.php';
?> 