<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  <title>list</title>
</head>
<body>

<header class="header">
        <p class="htext">お得なイベント開催中！</p>
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
    <a href="/" >トップページ</a>

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


<div>
    <div class="tophome">
            名古屋栄メンズエステ【nurunuru（ぬるぬる）】
        </div>
        <div>
            <img src="img/IMG_1617.JPG" alt="">
        </div>
  
        <div class="line">
      </div>
</div>

  <div id="back">


        <p class="messe">
          セラピストの個性<br>
        </p>
        <p class="messe1">
          当店はセラピスト毎に施術が異なります
        </p>

        <p class="messe2">
          お客様に満足頂くために、おもてなし精神のあるセラピストを採用しております。是非、お客様のお気に入りのセラピストを見つけて下さい。
        </p>

        <div class="space">
    <p class="common__ttl">Theraphist List</p>
        <div class="grid_girl">
            <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="ちーず" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
<p class="grid_detail ">
          ちーず<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>
        <div class="grid_girl">
                      <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="らむ" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
          <p class="grid_detail ">
          らむ<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>

        <div class="grid_girl">
                     <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="ぐらん" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
          <p class="grid_detail ">
          ぐらん<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>

        <div class="grid_girl">
                     <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="じじ" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
          <p class="grid_detail ">
          じじ<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>

        <div class="grid_girl">
                     <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="なの" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
          <p class="grid_detail ">
          なの<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>

        <div class="grid_girl">
                     <form class="grid_photo" method="post" action="/girl" enctype="multipart/form-data"> 
  @csrf
<input type="hidden" name="name" value="めあ" >
<input type=image class="item2" src="img/IMG_1588.PNG" class="item2">
</form>
          <p class="grid_detail ">
          めあ<br>
          年齢:20歳<br>
          身長:158cm<br>
          趣味：映画鑑賞、音楽<br>
          コメント：お客様に癒しを届けるために精一杯ご奉仕致します。<br>
          Twitter：@renho_sha<br>
        </p>
        </div>

</div>
</div>

<footer class="footer">
        <p>Copyright © 名古屋栄メンズエステ【nurunuru（ぬるぬる）】 All Rights Reserved.</p>
    </footer>

</body>
</html>