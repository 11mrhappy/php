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
  $date = sprintf('%04d年 % 02d月 %02d日', 2018, 1, 23);
  print($date);
?>

dはdigit(桁)要は数字、文字列を入れたいならs。
一文字目を0で補って、4桁の数字にするというのが%04dの見方。仮に文字列が入れば0000となる
また、半角を入れることも可能

</pre>
</main>
</body>    
</html>