<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet"type="text/css"  href="style2_php.css">
    </head>
    
    <body>
        <h1>お問合わせ内容の確認</h1>
        <div class="confirm">
            <p>お問合わせ内容はこちらでよろしいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
            </p>
            
            <p>名前
            <br>
            <?php echo $_POST['namae'];?>
            </p>
            
            <p>メールアドレス
            <br>
            <?php echo $_POST['address'];?>
            </p>
            
            <p>年齢
            <br>
            <?php echo $_POST['nenrei']."歳";?>
            </p>
            
            <p>コメント
            <br>
            <?php echo $_POST['coment'];?>
            </p>
            
            <form method="post" action="index_php.html">
                <input type="submit" class="button1" value="戻って修正する">
                
            </form>
            
            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する">
                <input type="hidden" value="<?php echo $_POST['namae'];?>" name="namae">
                <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                <input type="hidden" value="<?php echo $_POST['nenrei'];?>" name="nenrei">
                <input type="hidden" value="<?php echo $_POST['coment'];?>" name="coment">
                                                                               
            </form>
            
        </div>
    </body>
</html>