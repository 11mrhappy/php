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
  $age = '２０';
  
  $age = mb_convert_kana($age, 'n', 'UTF-8')
  if(is_numeric($age)){
    print($age . '歳');
  } else{
    print('年齢が数字ではありません');
  }
  ?>

  <br>
  is_numericは数値(半角)かどうかを判断する、数値ならtrue
  <br>
  全角数字を半角数字に直すにはmb_convert_kanaを使い、変数に変更後の値を再代入する
  <br>
  nで半角数字に変更できる、UTF-8は使ってる文字コード
</pre>
</main>
</body>    
</html>