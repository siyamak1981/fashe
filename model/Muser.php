
<?php
class user
{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function select_user($username)
    {

      $sql=$this->db->query("SELECT `username`, `password` FROM `user_tbl` WHERE `username`='$username'");
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
}
?>
