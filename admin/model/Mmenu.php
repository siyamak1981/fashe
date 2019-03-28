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

  public function submenu(){
    $sql=$this->db->query("SELECT * FROM `menu-tbl` WHERE `chid`='0'");
    $sub=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $sub;
  }
  public function list_menu(){
    $sql=$this->db->query("SELECT * FROM `menu-tbl`");
    $results=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
  public function selectParentMenu($chid){
    $sql=$this->db->query("SELECT * FROM `menu-tbl` WHERE `id`=$chid");
    $result=$sql->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
  public function delete_menu($id){
    $this->db->query(" DELETE FROM `menu-tbl` WHERE `menu-tbl`.`id` = '$id' ");
  }
  public function show_edit_menu($id){
    $result=$this->db->query("SELECT * FROM `menu-tbl` WHERE id='$id'");
    $res=$result->fetch(PDO::FETCH_ASSOC);
    return $res;
  }
  public function edit_menu($id,$data){
    $this->db->query(" UPDATE `menu-tbl` SET `title`='$data[title]',`url`='$data[url]',`chid`='$data[parent]', `status`='$data[status]' ,`sort`='$data[sort]' WHERE `menu-tbl`.`id` = $id  ");
  }
  // menu_default
  public function menu_list_default(){
    $rows=$this->db->query("SELECT * FROM `menu-tbl` WHERE `status`='1'  AND `chid`='0' ORDER BY sort ASC ");
    $row=$rows->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($row);die;
    return $row;
  }
  public function sub_menu_list_default($id){
    $sub=$this->db->query("SELECT * FROM `menu-tbl` WHERE `status`='1'  AND chid='$id' ORDER BY sort ASC");
    $subs=$sub->fetchAll(PDO::FETCH_ASSOC);
    return $subs;
  }
}
?>