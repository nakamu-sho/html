<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$weekdays = ['月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日', '日曜日'];

// 配列の要素を順に表示
foreach ($weekdays as $day) {
    echo $day . "<br>";
}
for ($i=0; $i < count($weekdays) ; $i++) { 
  echo $weekdays[$i] . "<br>";
}
?>
</body>
</html>