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
  $age = 20;

  if(is_numeric($age)){
    print($age . '歳');
  } else{
    print('年齢が数字ではありません');
  }
  ?>
  <br>
  is_numericは数値かどうかを判断する、数値ならtrue
</pre>
</main>
</body>    
</html>