<?php

class procat
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function procat_list()
    {
        $results = $this->db->query("SELECT * FROM procat_tbl");
        return $results;
    }
    public function procat_add($data)
    {
        $this->db->query("INSERT INTO `procat_tbl` (`title`, `chid`) VALUES  ('$data[title]','$data[chid]')");

    }
    public function promaincat_list()
    {
        $results = $this->db->query("SELECT * FROM `procat_tbl` WHERE chid='0' ");
        return $results;

    }
    public function procat_delete($id)
    {
        $this->db->query("DELETE FROM `procat_tbl` WHERE `procat_tbl`.`id` = $id");
    }
    public function procat_showEdit($id)
    {
        $result = $this->db->query("SELECT * FROM `procat_tbl` WHERE `procat_tbl`.`id` = $id ");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_edit($data, $id)
    {
        $this->db->query("UPDATE `procat_tbl` SET `title` = '$data[title]' , `chid` = '$data[chid]' WHERE `procat_tbl`.`id` = $id ");

    }


/*  default */
    public function procat_list_default()
    {
        $results = $this->db->query("SELECT * FROM procat_tbl where chid ='0'");
        $row = $results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_under_list_default($id)
    {
        $results = $this->db->query("SELECT * FROM procat_tbl where chid ='$id'");
        $row = $results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
?>



