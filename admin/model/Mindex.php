<?php
class main {
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function menu_list(){
        $results=$this->db->query("SELECT * FROM `menu-tbl` ");
        return  $results;
    }

    public function news_list(){
        $results = $this->db->query("SELECT * FROM  `news_list` WHERE `status` = 1");
        return  $results;
    }
}
?>