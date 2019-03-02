<?php
class menu
{
  public function __construct()
  {
    global $db;
    $this->db = $db;
  }
  public function add_menu($data){
      
    $this->db->query("INSERT INTO `menu-tbl`(`title`, `url`, `sort`, `status`, `chid`) VALUES ('$data[title]','$data[url]','$data[sort]','$data[status]','$data[parent]')" );
  }

  public function list_menu(){
    $sql=$this->db->query("SELECT * FROM `menu-tbl`");
    $results=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
}
?>