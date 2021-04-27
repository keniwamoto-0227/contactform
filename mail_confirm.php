<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charaset="utf-8">
        <title>演習1</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        <h1>お問合わせ内容確認</h1>
        
        <div class="cofirm">
            <p>お問合わせ内容はこちらでよろしいでしょうか？
                <br>よろしければ「送信する」ボタンを押してください。</p>
            
            <p>名前
            <br>
                <?php echo $_POST['name'];?></p>
            
            <p>メールアドレス
            <br>
            <?php echo $_POST['mail'];?></p>
            
            <p>年齢
            <br>
            <?php echo $_POST['age'];?></p>
            
            <p>コメント
            <br>
            <?php echo $_POST['comments'];?></p>
            
            <form action="index.html">
                <input type="submit" class="button1" value="=戻って修正する"/>
            </form>
            
            <from action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する"/>
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
                <input type="hidden" value="<?php echo $_POST['comments'];?>" name="commnets">
            </from>
        </div>
    </body>
</html>