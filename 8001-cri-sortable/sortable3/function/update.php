<?php

/* 追加 */
require_once('../Controller/Connect.php');
require_once('../Controller/AppController.php');
/* 移動した要素の座標をデータベースへ登録 */
if(!empty($_POST['left'])){
  try{
    $sql  = '
            UPDATE cri_sortable
            SET
              `left_x` = :LEFT,
              `top_y`  = :TOP
            WHERE
              `id` = :NUMBER
            ';
    $obj = new AppController();
    $obj->update_sortable($sql, $_POST['left'], $_POST['top'], $_POST['id']);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>