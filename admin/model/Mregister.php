<?php
class register {
    public function __construct (){
        global $db;
        $this->db=$db;

    }
    public function register_add($data){
       
     $this->db->exec("INSERT INTO `user_tbl` ( `username`, `password`,`lastname`,`city`) VALUES  ('$data[username]','$data[password]','$data[lastname]','$data[city]')");
       

    }
}

?>