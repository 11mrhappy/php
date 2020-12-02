<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
  お名前: <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
  $_REQUESTはフォームの値をうけとる、グローバル変数、配列みたいな形、formのinputタグのname属性の値を合わせることで指定したフォームの値を取得できる。
  セキュリティを考えるために使われるファンクションがhtmlspecialchars、例えばフォームでhtmlのタグをそのまま打つと反映されてしまうため危ない。
  1つ目のパラメーターをエスケープさせて、2つ目のパラメーター(ENT_QUOTES)でエスケープさせる。
  getメソッドもpostメソッド(index.html、フォームのメソッド)のどちらにも対応してるのが$_REQUEST。あらかじめgetかpostがわかってるならそれに合わせて$_GET,$_POSTにしたほうが良い。
</pre>
</main>
</body>    
</html>