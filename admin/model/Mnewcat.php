<?php
class newcat
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function add_newcat($data)
    {
        // var_dump($data);die;
        $this->db->query("INSERT INTO `newcat_tbl` (`title`, `chid`) VALUES ('$data[title]','$data[chid]')");
    }

    public function newmaincat_list(){
        $sql=$this->db->query("SELECT * FROM `newcat_tbl` WHERE `chid`='0'");
        $row=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        // var_dump($row);die;
    }
    
    public function newcat_list(){
        $result=$this->db->query("SELECT * FROM `newcat_tbl`");
        $res=$result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    
    public function newcat_delete($id){
        $this->db->query("DELETE FROM `newcat_tbl` WHERE `newcat_tbl`.`id` = $id");
    }
    public function newcat_showedit($id){
        $news=$this->db->query("SELECT * FROM `newcat_tbl` WHERE `id`='$id'");
        $new=$news->fetch(PDO::FETCH_ASSOC);
        return $new;
    }
    public function newcat_edit($data,$id){
        // var_dump($data,$id);die;
        $this->db->query("UPDATE `newcat_tbl` SET `title`='$data[title]', `chid`='$data[chid]' WHERE `id`=$id");
    
    }
}
 