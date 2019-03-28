
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
    $this->db->exec("INSERT INTO `news_tbl` (`title`, `body`,`newcat_id`, `image`) VALUES  ('$data[title]', '$data[body]', '$data[newcat_id]', '$data[image]')");
    // var_dump($data);die;
  }

  public function new_list_catid($newcat_id)
  {
     $results = $this->db->query("SELECT * FROM news_tbl WHERE newcat_id='$newcat_id'");
     $results=$results->fetchAll(PDO::FETCH_ASSOC);
      return $results;
  }

  public function newcat_list(){
    $results = $this->db->query("SELECT * FROM `newcat_tbl`");
    return $results;
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
  }

  public function edit_news_show($id)
  {
    $sql = $this->db->query("SELECT * FROM `news_tbl` WHERE `id`='$id'");
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function edit_news($data,$id)
  {
    // var_dump($id);die;
    $this->db->query("UPDATE `news_tbl` SET  `body` ='$data[body]', `title`= '$data[title]', `newcat_id`='$data[newcat_id]' WHERE `id` = '$id'");
  }
}
?>
