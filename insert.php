<?php
mb_internal_ecding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("inset into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']"','".$_POST['age']."','".$_POST['comments'].'");");

?>

<?doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
 <title>お問い合わせフォームを作る</title>
<link rel="stylesheet"type="text/css" herf="style2.css">
</head>

<body>
  <h1>お問合せフォーム</h1>
  
  <div class="confirm">
  <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
  </p>
  
  </body>
  </html>