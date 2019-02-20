<?php

    require_once 'model/Mregister.php';
    $class = new register();
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        $class->register_add($data);
        
    }

    require_once 'view/register.php';
?>