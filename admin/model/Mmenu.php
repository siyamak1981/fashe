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
}
?>