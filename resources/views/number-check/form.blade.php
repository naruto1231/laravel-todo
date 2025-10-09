<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intel-scale=1.0">
<title>HTMLブログサンプルページ</title>
<title>数字チェックフォーム</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--ヘッダー -->
<header>
 <div class="container header-inner">
   <div class="logo">DMM WEBCAMP MEDIA</div>
   <nav>
    <ul class="nav-menu">
     <li><a href="#">サービス一覧</a></li>
     <li><a href="#">学習コース</a></li>
     <li><a href="#">転職コース</a></li>
     <li><a href="#">資料請求</a></li>
     <li><a href="#">お問い合わせ</a></li>
    </ul>
   </nav>
 </div>   
</header>


<!--メイン記事 -->
<main>
<div class="container">
 <article class="blog-article">
 <h1>[初心者必見！]</h1>

 </article>
 <
</div>

</main>

<!--奇数チェック -->
　　<li><a href="#">サービス一覧</a></li>
<h1>数字の偶数・奇数チェック</h1>
  <form action="{{url('/number-check')}}" method="POST">
   @csrf
   <label for="number">数字を入力してください：</label>
   <input type="text" name="number" id="number" required>
   <button type="submit>チェックする</button>
  </form>
</body>
</html>