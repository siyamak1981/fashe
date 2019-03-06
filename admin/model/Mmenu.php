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
    $sql=$this->db->query("SELECT * FROM `menu-tbl` WHERE `chid` = '0'");
    $sub=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $sub;
  }
   
  public function list_menu(){
    $sql=$this->db->query("SELECT * FROM `menu-tbl`");
    $results=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function delete_menu($id){
    $this->db->query(" DELETE FROM `menu-tbl` WHERE `menu-tbl`.`id` = '$id' ");
  }
  public function SelectParentMenu($chid){
    $sql=$this->db->query("SELECT FROM `menu-tbl` WHERE id ='$child' ");
    $result=$sql->fetch(PDO::FETCH_ASSOC);
    return $res['title'];
  }
  public function show_edit_menu($id){
    $result=$this->db->query("SELECT * FROM `menu-tbl` WHERE id='$id'");
    // var_dump($result);die;
    $res=$result->fetch(PDO::FETCH_ASSOC);
    return $res;
  }
  public function edit_menu($id,$data){
    $this->db->query(" UPDATE `menu-tbl` SET `title`='$data[title]',`url`='$data[url]',`chid`='$data[parent]', `status`='$data[status]' ,`sort`='$data[sort]' WHERE `menu-tbl`.`id` = $id  ");
    var_dump($data);
    var_dump($id);
  }
}
?>

