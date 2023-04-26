<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板を作る！</title>
    <meta name="description" content="sanple sanple sanple sanple sanple">
    <link rel="stylesheet" href="CSS/sanitize.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <h1>投稿内容確認</h1>
    <div class="confirm">
        <p>投稿の内容は、こちらで宜しいでしょうか？
            <br>よろしければ「投稿する」ボタンを押してください。
        </p>
        <p>ハンドルネーム
           <br>
           <?php
           echo $_POST['handlename'];
           ?>
        </p>
        <p>タイトル
           <br>
           <?php
           echo $_POST['title'];
           ?>
        </p>
        <p>コメント
           <br>
           <?php
           echo $_POST['comments'];
           ?>
        </p>
        <form action="index.php">
            <input type="submit" class="button1" value="戻って修正する">
        </form>
        <form action="insert.php"method="post">
            <input type="submit" class="button2" value="投稿する">
            <input type="hidden" value="<?php echo $_POST['handlename']; ?>" name="handlename">
            <input type="hidden" value="<?php echo $_POST['title']; ?>" name="title">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
        
    </div>
</body>
</html>