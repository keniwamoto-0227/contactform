<?php
mb_internal_encording("utf8");

$pdo=new PDO("mysql:dbname=ensyu1;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['commnets']."');");

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>演習１</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        <h1>お問合わせフォーム</h1>
        
        <div class="confirm">
            <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
        </div>
    </body>
</html>