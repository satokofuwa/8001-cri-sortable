
<!DOCTYPE html>
<html>
  <head>
    <meta charaset ="UTF8">
    <title></title>
  </head>
  <body>
    <div id = "main">
      <?php
     $data = [
      ['1', '大橋太郎', '32歳', '目黒区大橋1-2-5', '公務員', 'キャンプ'],
      ['2', '池尻次郎', '28歳', '目黒区池尻1-2-5', '家事手伝い', '映画鑑賞'],
      ['3', '大橋三郎', '25歳', '渋谷区北沢2-3-6', 'デザイナー', 'ドライブ']
    ];
      echo '<table>';
        foreach ($data as $val){
           echo ' <tr>';
           echo '   <td>'. $val[0].'</td>';
           echo '   <td>'. $val[2].'</td>';
           echo '   <td>'. $val[3].'</td>';
           echo '   <td>'. $val[4].'</td>';
           echo '   <td>'. $val[5].'</td>';
           echo '   <tr>';
        }
       echo '</table>';
      ?>
    </div>
  </body>
</html>