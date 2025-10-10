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
 <h1>[初心者必見！]HTMLのブログページを15分で作成する方法を解説
</h1>
<p class="meta">公開日: 2021.09.15 | 更新日: 2024.01.06</p>
<img src="img/sample.jpg"  alt="ブログサンプル画像"   class="article-image">
  <p>
「ブログサイトを一から作ってみたい」「ブログページってHTMLだけで作れるのかな？」と思ったことはありませんか？今回は、初心者向けにHTMLとCSSだけでブログページを作る方法を解説します。
  </p>
<h2>STEP1: 記事の下書きを作る</h2>
<p>まずは書きたい記事をテキストファイルで作成します。タイトル、見出し、本文、リストなどを用意しておきましょう。</p>
 <ul>
  <li>リスト1</li>
  <li>リスト2</li>
   <li>リスト3</li>
 </ul>

 <h2>STEP1: 記事の下書きを作る</h2>
 <p>HTMLの基本構造を作ります。headタグ、bodyタグを記述し、CSSをリンクします。</p>
 <h3>小見出しの例<</h3>
 <p></p>
</article> 

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