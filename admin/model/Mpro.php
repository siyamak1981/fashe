<?php

class pro
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function pro_list(){
        $results=$this->db->query("SELECT * FROM pro_tbl");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function pro_list_catid($cat_id)
    {
       $results = $this->db->query("SELECT * FROM pro_tbl WHERE cat_id='$cat_id'");
       $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function pro_add($data,$to)
    {
        $this->db->query("INSERT INTO `pro_tbl` (`title`, `cat_id`,`text`,`count`,`price`,`image1`) VALUES  ('$data[title]','$data[cat_id]','$data[text]' , '$data[count]', '$data[orice]', '$to')");

    }
    public function procat_list()
    {
        $results = $this->db->query("SELECT * FROM `procat_tbl`");
        return $results;

    }
    public function pro_delete($id)
    {
        $this->db->query("DELETE FROM `pro_tbl` WHERE `pro_tbl`.`id` = '$id' ");
    }
    public function pro_showEdit($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        //
        return $row;
    }
    public function pro_edit($data,$id)
    {
        $this->db->query("UPDATE `pro_tbl` SET `title` = '$data[title]' , `text` = '$data[text]', `price`= '$data[price]' WHERE `pro_tbl`.`id` = $id ");
        
      
    }


/*  default */
    public function pro_list_default(){
        $results=$this->db->query("SELECT * FROM pro_tbl where chid ='0'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function pro_under_list_default($id){
        $results=$this->db->query("SELECT * FROM pro_tbl where chid ='$id'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
?>



