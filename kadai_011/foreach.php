<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>課題011</title>
  </head>

  <body>
      <?php
      //連想配列を定義する
      $item = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];
    foreach ($item as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
      ?>
  </body>
</html>