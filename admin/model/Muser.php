<?php
   class User{
        public function __construct()
        {
            global $db;
            $this->db=$db;
        }
        public function select_user($username){
           $sql = $this->db->query("SELECT * FROM `user_tbl` WHERE `username`='$username'");
           $results=$sql->fetch(PDO::FETCH_ASSOC);
           return $results;
        }

    }