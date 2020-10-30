

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4each 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<header>
    <div class="logo"><img src="4eachblog_logo.jpg"> </div>
    <ul class="menu">
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4each について</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
    </ul>
    </header>

    
<body>

<?php 
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=ayano;host=localhost;","root","mysql");

$stmt=$pdo->query("select*from 4each_keijiban");
    
    

    ?>

    <main>
    <div class="left">
        
        <h1>プログラミングに役立つ掲示板</h1>

    
    <form method="post" action="insert.php">
     <h2>入力フォーム</h2>
     <div>
        <label>ハンドルネーム</label>
        <br>
        <input type="text" class="text" size="35" name="handlename">
     </div>
     <div>
        <label>タイトル</label>
        <br>
        <input type="text" class="text" size="35" name="title">
     </div>
     <div>
        <label>コメント</label>
        <br>
         <textarea cols="60" rows="20" name="comments"></textarea>
     </div>
     <div>
         <input type="submit" class="submit" value="投稿する">
     </div>
    </form>
        
        
<?php
    while($row = $stmt->fetch()){
    
    echo "<div class='kiji'>";
    echo "<h4>".$row['title']."</h4>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";  
        
}
?>
        
        
        </div>
        
    

</main>
    
        <div class="right">
            
        <h3>人気の記事</h3>
            <ul>
           <li>PHPオススメ本</li>
           <li>PHP MyAdminの使い方</li>
           <li>今人気のエディタTop5</li>
           <li>HTMLの基礎</li>
          </ul>
        <h3>おすすめリンク</h3>
            <ul>
           <li>インターノウス株式会社</li>
           <li>XAMPPのダウンロード</li>
           <li>Eclipseのダウンロード</li>
           <li>Brachetsのダウンロード</li>
          </ul>
         <h3>カテゴリ</h3>
          <ul>
           <li>HTML</li>
           <li>PHP</li>
           <li>MuSQL</li>
           <li>JavaScript</li> 
          </ul> 
            
        </div>

<footer>
    <div class="footermoji">copyright©internous | 4each blog the which provides A to Z about programing.</div></footer>
    
    
    
    

    
    </body>
</html>