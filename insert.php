<?php
mb_internal_encoding("utf8");


$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo -> exec("insert into contactform(name,mail,age,comments)values('".$_POST['namae']."','".$_POST['address']."','".$_POST['nenrei']."','".$_POST['coment']."');");

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css" href="style2_php.css">
    </head>
    
    <body>
        <h1>お問合わせフォーム</h1>
        <div class="confirm">
            <p>お問合わせありがとうございました。
            <br>3営業日以内に担当者よりご連絡差し上げます。</p>
        </div>
    </body>
    
</html>