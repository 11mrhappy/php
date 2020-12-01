<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$news = file_get_contents('../../news_data/news.txt');
$news .= "2018-06-03 ニュースを追加しました\n";
file_put_contents('../../news_data/news.txt', $news);

print($news);
// readfile('../../news_data/news.txt');
?>
readfileはデータを取得して表示するだけ、編集とかはできない
.= は文字列連結してる、 変数 = 変数 . '文字列'  と同じ
</pre>
</main>
</body>    
</html>