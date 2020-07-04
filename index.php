<!--
Template Name: cafe
-->

<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cafeーRaum</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">


</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>

<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<link rel='dns-prefetch' href='//ajax.googleapis.com'>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<link rel='dns-prefetch' href='//maps.googleapis.com'>
<link rel='dns-prefetch' href='//www.youtube.com'>


</head>
<body class="w-100">
<div class="wrap"> 
  <header id="top-head">
      <div class="inner">
          <div id="mobile-head">
              <h1 class="logo">Logo</h1>
              <div id="nav-toggle">
                  <div>
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
          </div>
          <nav id="global-nav">
              <ul>
                  <li><a href="#">About<span class="sub_title"><br>Raumに関して<span></a></li>
                  <li><a href="#">Menu<span class="sub_title"><br>メニュー<span></a></li>
                  <li><a href="#"><span class="sub_title"><br>Store<span></a></li>
                  <li><a href="#">Access<span class="sub_title"><br>アクセス<span></a></li>
                  <li><a href="#">Reserve<span class="sub_title"><br>予約<span></a></li>
              </ul>
          </nav>
      </div>
  </header>

	<!-- Top画像 -->
	<div id="top-img" class="carousel claster" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div id="slides" class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home.jpg" alt="">
				<div class="carousel-caption">
					<h1 class="display-2">Orion Cafe</h1>
					<a href="#connect" class="reserved_btn btn btn-lg">予約</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home2.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home3.jpg" alt="">
			</div>
		</div>
  </div>

  <!--上の段-->
  <div class="row mx-md-4 mx-2">
    <!--上左側-->
    <div class="content1 col-lg-8" style="display:table-cell;">
      <!--１段目-->
      <div class="movie content px-md-2 px-sm-1">
        <div id="player"></div>
      </div>
      <!--２段目-->
      <div class="row content px-md-2 px-2">
        <!--２段目左-->
        <div class="col-7 px-md-3 px-1 m-auto content" style="display:table-cell;">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu.jpg" alt="Voice">
            <p class="char">Lanch</p>
          </a>
        </div>
        <!--２段目右-->
        <div class="between col-5 p-md-3 p-2 row content m-auto p" style="display:table-cell;">
          <div class="content pb-md-4 pb-1">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cafe.jpg" alt="Voice">
              <p class="char">cafe</p>
            </a>
          </div>
          <div class="content">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home.jpg" alt="Voice">
              <p class="char">Store</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--上右側-->
    <div class="row content2 between col-lg-4 px-2 text-center">
      <!--１段目-->
      <div class="content2-1 brand col-sm-6 col-lg-12 px-2 my-auto">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Raum.png" alt="Voice">
        </a>
      </div>
      <div class="content2-2 col-sm-6 col-lg-12 px-0">
        <div class="about p-2">
          <h4 class="text-center">About</h4>
          <p class="text-left">Cafe Raum <br>
          場　所：東京都千代田区丸の内34<br>
          休業日：不定休
          </p>
        </div>
        <!--３段目-->
        <div class="reserve content text-center pb-3 px-2 d-flex">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/launch-main.jpg" class="pcimg" alt="予約">
            <img src="<?php echo get_template_directory_uri(); ?>/img/launch-sp.jpg" class="spimg" alt="予約">
            <p class="char">Reserve</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--２段目-->
  <div class="row content3 px-0 mx-md-4 mx-2 my-2 text-center">
    <!--左-->
    <div class="col-md-4 col-12 content p-1 p-md-0 my-auto">
      <div class="news mx-1 mr-md-3">
        <a href="#">
          <p class="newschar text-left">News <span class="pl-3">2020.12.5<span></p>
          <div>
            <p>テイクアウトをはじめました</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-6 content p-1 p-md-0 my-auto">
      <div class="news mx-1 mr-md-3">
        <a href="#">
          <p class="newschar text-left">News <span class="pl-3"> 2020.11.5<span></p>
          <div>
            <p>営業時間変更のお知らせ</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-6 content p-1 p-md-0 my-auto">
      <div class="news mx-1">
        <a href="#">
          <p class="newschar text-left">News <span class="pl-3">2020.10.10<span></p>
          <div>
            <p>店舗運営再開のお知らせはこちら</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!--3段目-->
  <div class="row content4 px-0 mx-md-4 mx-2">
    <div class="col-md-3 col-6 content p-2 my-auto">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Chef2.jpg" class="spimg" alt="シェフ">
        <p class="char">スタッフ紹介</p>
      </a>
    </div>
    <div class="col-md-3 col-6 content p-2 my-auto">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Chef.jpg" class="spimg" alt="採用">
        <p class="char">採用</p>
      </a>
    </div>
    <div class="col-md-3 col-6 content p-2 my-auto">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/vegetable.jpg" class="spimg" alt="地元の野菜">
          <p class="char">こだわり食材</p>
        </a>
    </div>
    <div class="col-md-3 col-6 content p-2 my-auto">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Corse.jpg" class="spimg" alt="ケータリング">
        <p class="char">ケータリング事業</p>
      </a>
    </div>
  </div>

  <!--4段目-->
  <div class="content5 row px-0 mx-md-4 mx-2 text-center">
    <div class="col-md-6  col-12 p-2 my-auto content">
      <div class="cont_last">
        <a href="#">
          <div >
            <p>contact</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-12 p-2 my-auto content">
    <div class="cont_last">
        <a href="#">
          <div>
            <p>Raumのこだわり</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  (function($) {
      $(function() {
          var $header = $('#top-head');
          // Nav Fixed
          $(window).scroll(function() {
              if ($(window).scrollTop() > 350) {
                  $header.addClass('fixed');
              } else {
                  $header.removeClass('fixed');
              }
          });
          // Nav Toggle Button
          $('#nav-toggle').click(function(){
              $header.toggleClass('open');
          });
      });
  })(jQuery);

  // YouTubeの埋め込み
  function onYouTubeIframeAPIReady() {
      ytPlayer = new YT.Player(
          'player', // 埋め込む場所の指定
          {
              videoId: 'FkjBg0nFqgY', // YouTubeのID
              playerVars: {
                  loop: 1,//0:ループしない 1:ループする 1の場合playlist設定必須
                  playlist: 'FkjBg0nFqgY',//次に流すYoutubeのID
                  controls: 0,//コントローラー無し
                  autoplay: 1,//オートプレイ
                  showinfo: 0//動画タイトルなど表示しない
              },
              events: {
                  'onReady': onPlayerReady
              }
          }
      );
  }
  //プレイ準備完了後
  function onPlayerReady(event) {
    event.target.playVideo();
    event.target.mute();
  }
</script>
</body>
</html>