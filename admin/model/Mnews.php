
<?php
class news
{
  public function __construct()
  {
    global $db;
    $this->db = $db;
  }
  public function add_news($data)
  {

    $this->db->exec("INSERT INTO `news_tbl` (`title`, `body`) VALUES  ('$data[title]', '$data[body]')");
  }
  public function select_news()
  {
    $sql = $this->db->query("SELECT * FROM `news_tbl` ");
    $result = $sql->fetchAll();
    return $result;

  }
  public function delete_news($id)
  {


    $this->db->query("DELETE FROM `news_tbl` WHERE `news_tbl`.`id` ='$id'");
    header("location:index.php?c=news&a=list");

  }
  public function edit_news_show($id)
  {

    $sql = $this->db->query("SELECT * FROM `news_tbl` WHERE `id`='$id'");
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
  public function edit_news($id, $data)
  {
    
    $this->db->query("UPDATE `news_tbl` SET `body` ='$data[body]', `title` =  '$data[title]'  WHERE `news_tbl`.`id` = '$id'");
    // header ("location:index.php?c=news&a=list");
    // header("location:index.php?c=news&a=edit");

  }
}
?>
