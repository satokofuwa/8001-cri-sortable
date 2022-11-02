<?php
ini_set('display_errors', 1);  /* MAMPの設定次第では記述が必要 1は表示、0は非表示*/
error_reporting(-1);  /* 0は表示させない、-1はすべて表示 */
/* データベース設定 */
define('DB_DNS', 'mysql:host=localhost; dbname=cri_sortable; charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
/* データベースへ接続 */
try {
  $dbh = new PDO(DB_DNS, DB_USER, DB_PASSWORD);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>sortable</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">

 <div id="input_form">
   <form action="index.php" mthod = "POST">
     <input type ="text" name = "inputName">
     <input type ="submit" value = "登録">
   </form>
 </div>
 
<div id="drag-area">
<?php
$sql = 'SELECT * FROM cri_sortable';
$stmt = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC); /*stmt ステートメント */
foreach($stmt as $result){                   /*PDO::FETCH_ASSOC　　（カラム名で添字を付けた配列を返す）*/
   echo '  <div class="drag" data-num="'.$result['id'].'"   style="left:'.$result['left_x'].'px; top:'.$result['top_y'].'px;">'.PHP_EOL;
   echo '  <p><span class="name">'.$result['id'].' '.$result['name'].'</span></p>'.PHP_EOL;
   echo '  </div>'.PHP_EOL;
}
?>
</div>

</div>
</body>
</html>