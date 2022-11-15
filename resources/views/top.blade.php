<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  <title>toppage</title>
</head>
<body>

<header class="header">
        <div class="hearrr">
            <img src="img/IMG_1616.JPG" alt="">
        </div>
</header>

<div class="fixfooter">
<div class="foot-btn">
        <p class="tell-btm">
          <span class="tell-btm2">受付時間24時間</span>
          </br>今すぐ電話予約</p>

        <p class="rec-btm">セラピスト求人は</br>
      こちらをクリック</p>

</div>
</div>

<input type="checkbox" id="drawer">
<label for="drawer" class="open"><span></span></label>
<label for="drawer" class="close"></label>
<nav class="menu">
	<h2>menu</h2>
	<ul>
		<li>
    <a href="list" >セラピスト一覧</a>

  </li>
		<li>
    <a href="/schedule">本日のセラピスト</a>
  </li>
		<li> 
    <a href="/menu">メニュー</a>
  </li>
		<li><a href="/access">アクセス</a></li>
		<li><a href="/recruit">セラピスト求人</a></li>
	</ul>
</nav>

<div class=”brrr”>
    <div class="tophome">
            名古屋栄メンズエステ【nurunuru（ぬるぬる）】
        </div>
        <div>
            <img src="img/IMG_1620.JPG" alt="">
        </div>
        <!---
        <p class="home">
          貴方と私の二人だけの時間<br><br>
          ようこそ楽園へ
        </p>
        <div class="topgirl">
            <img src="img/IMG_1286.JPG" alt="">
        </div>
        --->
</div>

<div class="line">
      </div>

  <div id="back">
    <div>
    <p class="common__ttl">Twitter</p>
    <div class="tweet">
    <a class="twitter-timeline" href="https://twitter.com/cancan_2022?ref_src=twsrc%5Etfw" data-width="100%" data-tweet-limit="1" data-chrome="noheader">Tweets by cancan_2022</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<div class="space">
    <p class="common__ttl">Pickup Theraphist</p>


<div class="flex__item"> 
  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="ちーず" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>

  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="らむ" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>


  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="めあ" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>

</div>
<div class="flex__item">

  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="なの" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>

  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="ぐらん" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>

  <form class="item" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="じじ" >
<input type=image class="item2" src="img/IMG_1618.JPG" class="item2">
</form>
</div>

</div>
    </div>

    <div class="space">
      <p class="common__ttl">Event Information</p>
      <a class="topgirl2" href="">
        <img src="img/IMG_1291.PNG" alt="">
</a>
</div>




<div class="space">
    <p class="common__ttl">Today's Theraphist</p>



 
<div class="flex__item">

  
<div class="today">
<form method="post" action="/girl" enctype="multipart/form-data">
  @csrf 
<input type="hidden" name="name" value="ちーず" >
<input type=image src="img/IMG_1618.JPG" class="todayitem2">
</form>
<h2 class="todaytext">ちーず</h3>
<h2 class="todaytext2">12:00〜21:00</h3>
</div>

<div class="today">
<form method="post" action="/girl" enctype="multipart/form-data">
  @csrf 
<input type="hidden" name="name" value="じじ" >
<input type=image src="img/IMG_1618.JPG" class="todayitem2">
</form>
<h2 class="todaytext">じじ</h3>
<h2 class="todaytext2">12:00〜21:00</h3>
</div>
</div>

<div class="flex__item">
      <div class="today">
<form method="post" action="/girl" enctype="multipart/form-data">
  @csrf 
<input type="hidden" name="name" value="ぐらん" >
<input type=image src="img/IMG_1618.JPG" class="todayitem2">
</form>
<h2 class="todaytext">ぐらん</h3>
<h2 class="todaytext2">12:00〜21:00</h3>
</div>

<div class="today">
<form method="post" action="/girl" enctype="multipart/form-data">
  @csrf 
<input type="hidden" name="name" value="らむ" >
<input type=image src="img/IMG_1618.JPG" class="todayitem2">
</form>
<h2 class="todaytext">らむ</h3>
<h2 class="todaytext2">12:00〜21:00</h3>
</div>
</div>

<div class="flex__item">
      <div class="today">
<form method="post" action="/girl" enctype="multipart/form-data">
  @csrf 
<input type="hidden" name="name" value="なの" >
<input type=image src="img/IMG_1618.JPG" class="todayitem2">
</form>
<h2 class="todaytext">なの</h3>
<h2 class="todaytext2">12:00〜21:00</h3>
</div>

</div>

</div>

<div id="back2">
<div class="space">
      <p class="common__ttl">New Theraphist</p>
      <a class="topgirl2" href="">
        <img src="img/IMG_1292.PNG" alt="">
</a>
<a class="topgirl2" href="">
        <img src="img/IMG_1292.PNG" alt="">
</a>
</div>

<div class="space">
      <p class="common__ttl">News</p>
      <a class="topgirl2" href="">
        <img src="img/IMG_1293.PNG" alt="">
</a>

</div>

<div class="space">
      <p class="common__ttl">Link</p>
      <a class="topgirl2" href="">
        <img src="img/IMG_1294.PNG" alt="">
</a>

</div>

</div>
</div>

<footer class="footer">
        <p>Copyright © 名古屋栄メンズエステ【nurunuru（ぬるぬる）】 All Rights Reserved.</p>
    </footer>



<!---
  <header class="header flex__item">
    <div class="header__txt">
            名古屋栄メンズエステ【nurunuru（ぬるぬる）】
        </div>
        <div class="header__logo">
            <img src="img/download.png" alt="">
        </div>
  </header>
  !--->
</body>
</html>