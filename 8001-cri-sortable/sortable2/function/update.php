<?php
require_once('../config/config.php');  
/* 移動した要素の座標をデータベースへ登録 */
if(!empty($_POST['left'])){
  try{
    $sql  = 'UPDATE `cri_sortable` SET `left_x` = :LEFT, `top_y` = :TOP WHERE `id` = :NUMBER';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':LEFT'  , $_POST['left'], PDO::PARAM_INT);
    $stmt->bindValue(':TOP'   , $_POST['top'],  PDO::PARAM_INT);
    $stmt->bindValue(':NUMBER', $_POST['id'],   PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>