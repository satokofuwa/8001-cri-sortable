<?php
require_once('../config/config.php');  
/* 新規氏名+性別をデータベースへ登録 */
if(!empty($_POST['inputName'])){
  try{
    $sql  = 'INSERT INTO cri_sortable(name, gender_id) VALUES(:ONAMAE, :GENDER)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':ONAMAE', $_POST['inputName'],   PDO::PARAM_STR);
    $stmt->bindValue(':GENDER', $_POST['inputGender'], PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>
