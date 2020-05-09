<!DOCTYPE html>

<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>funny.com</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

	<style>
		.about {
		background-image: url("<?php echo get_template_directory_uri(); ?>/img/back.jpg");
		background-attachment: fixed;
		background-position: center center;
		width:100%
		}

		#icon,#about-content{
			opacity:80%;
			border-radius:30px;
		}
	</style>

</head>



<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

	<!--メニュー-->
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/funnylogo.png" alt=""></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link"  href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#work">施工実績</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#event">イベント</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#comit">こだわり</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#access">お問合せ</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!---イメージスライダー-->
 <!-- ホーム画面-->

 <div id="home" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#home" data-slide-to="0" class="active"></li>
		<li data-target="#home" data-slide-to="1"></li>
		<li data-target="#home" data-slide-to="2"></li>
	</ul>
	<div id="home" class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo get_template_directory_uri(); ?>/img/main1.jpg" alt="">
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/main2.jpg" alt="">
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/house2-3.jpg" alt="">
		</div>
		<div class="carousel-caption">
			<h1 id="title" class="title">幸せ空間</h1>
			<h2>Incoron</h2>
			<a href="#connect" class="con_btn btn btn-light btn-lg mt-5　p-3">個別相談のお申し込み</a>
		</div>
	</div>
</div>

<!--思い-->
<section id="about" class="bg-white p-md-5 p-sm-3 mt-5 text-center">
	<div class="about">
		<h1 class=" text-center m-auto p-md-3">Message</h1>
		<hr>
		<div class="p-4">
			<h2 class="my-3" id="meassagetitele">この家にいると<span class="ho">”ほっ”とする</span> </h2>
			<div id="message" class="p-3">
				<h4 class="py-3"><br>居心地がいい空間を実現する。</h4>
				<p>「子供と一緒に料理がしたい」</p>
				<p>「家族とコミュニケーションをたくさん取りたい」</p>
				<p>「服がいっぱいがあるから収納スペースはたくさん欲しい」</p>
				<p>「家事がしやすい家がいい」「掃除がしやすい家がいい」</p>
				<h5 class="pt-4">Incoronはあなたのこだわりが詰まったお家を実現します</h5>
			</div>
		</div>
	</div>
</section>

<!--施工実績-->
<section id="work" class="bg-white text-lg-center">
	<h1 class="text-center m-auto pt-3 ">施工実績</h1>
	<hr>
	<div class="row px-5">
	<!--case1-->
	<div id="case1" class="carousel slide carousel-fade col-md-5 col-sm-12 m-auto px-2 py-0 text-center" data-ride="carousel">
			<h2 class="my-0 pt-5">case 1</h2>
			<div class="carousel-inner mx-auto text-center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house1-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house1-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house1-3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house1-4.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#case1" role="button" data-slide="prev">
					<span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
					
				</a>
				<a class="carousel-control-next" href="#case1" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="work_info">
				【犬山市】オシャレなのにどこか落ち着くお家
			</div>
		</div>
	<!--case2-->

		<div id="case2" class="carousel slide carousel-fade col-md-5 col-sm-12 m-auto px-2 py-0 text-center" data-ride="carousel">
			<h2 class="my-0 pt-5">case 2</h2>
			<div class="carousel-inner mx-auto text-center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house2-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house2-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house2-3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house2-4.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#case2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#case2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="work_info">
				【東海市】リゾート地をイメージしたモダンなお家
			</div>
		</div>
	</div>


	<div class="row px-5">
		<!--case3-->

		<div id="case3" class="carousel slide carousel-fade col-md-5 col-sm-12 m-auto px-2 py-0 text-center" data-ride="carousel">
			<h2 class="my-0 pt-5">case 3</h2>
			<div class="carousel-inner mx-auto text-center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house3-1.jpg" class="d-block w-100 h-40" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house3-2.jpg" class="d-block w-100 h-40" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house3-3.jpg" class="d-block w-100 h-40" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house3-4.jpg" class="d-block w-100 h-40" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#case3" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#case3" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="work_info">
				【豊明市】ひかりが差し込む明るいお家
			</div>
		</div>


		<!--case4-->

		<div id="case4" class="carousel slide carousel-fade col-md-5 col-sm-12 m-auto px-2 py-0 text-center" data-ride="carousel">
			<h2 class="my-0 pt-5">case 4</h2>
			<div class="carousel-inner mx-auto text-center">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house4-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house4-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house4-3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/house4-4.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#case4" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#case4" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="work_info">
				【一宮市】リビングに家族が集まってくるお家
			</div>
		</div>
	</div>
</section>



<!-- 悩み -->
<section id="Event">
	<div class="Worries">
		<div class="event row text-center">
			<div class="col-12">
				<h1>Event</h1>
			</div>
		</div>
		<hr>
		<div class="Worries_img">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/big_house1.png" class="big_house1 m-0 p-0" alt="注文住宅">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/big_house3.png" class="big_house3 m-0 p-0" alt="注文住宅">
			</div>
		</div>
		<div class="Worries_info">
			<div class="text1 m-0 ">
				<div class="Worries_info1 text-left">
					<p><i class="far fa-check-square mx-1"></i>マイホームが欲しいけど、何から始めたらいいの？</p>
					<p><i class="far fa-check-square mx-1"></i>注文住宅ってどこまでできるの？</p>
					<p><i class="far fa-check-square mx-1"></i>家を建てる時の注意点は？</p>
					<p><i class="far fa-check-square mx-1"></i>マイホームの費用はどれくらいかかるの？</p>
				</div>
					<h3 class="Worries_info2 mt-5 text-center"><span>Incoron</span>のイベントでこんな疑問が解決します</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="Event2">
	<div class="container-fluid py-5 px-0 bg-white text-center">
		<div class="row padding">
			<div class="col-lg-4 col-md-6">
				<h5 class="text-center pb-3">\実際にお家を見たい方なら/</h5>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/event1.png">
					<div class="card-body text-center">
						<h4 class="card-title">展覧会</h4>
						<a href="#" class="event_btn btn btn-warning">詳細</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5 class="text-center pb-3">\じっくり話したいなら/</h5>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/event2.png">
					<div class="card-body text-center">
						<h4 class="card-title">個別相談会</h4>
						<a href="#" class="event_btn btn btn-warning">詳細</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<h5 class="text-center pb-3">\アウトドアが好きなら/</h5>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/event3.png">
					<div class="card-body text-center">
						<h4 class="card-title">お庭でアウトドア</h4>
						<a href="#" class="event_btn btn btn-warning">詳細</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<a href="#" class="big_btn btn"><i class="fa fa-arrow-circle-right text-left" aria-hidden="true"></i>イベント一覧</a>
	</div>
</section>

<!-- こだわり -->
<section id="comit" class="container-fluid  m-auto">
	<div class="comit row welcome text-center">
		<div class="col-12">
			<h1>家づくりの</h1><h1><span>３つ</span>のこだわり</h1>
		</div>
	</div>
	<div class="container-fluid padding text-sm-center">
		<div class="row padding m-auto my-0 p-0 justify-content-center">
			<div id="pic" class="col-md-4 p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/comit1.jpg" alt="高い自由性" class="img-fluid w-100px text-center">
			</div>
			<div  id="info" class="col-md-6 text-lg-left">
				<h3 class="mb-1.5">高い自由性</h3>
				<p>心地いい家をつくるには、ライフスタイルに合わせた間取りであることが大切。Incoronでは完全自由設計のため、あなたの家族に合った間取りを実現できます。</p>
			</div>
		</div>
		<hr>
		<div class="row padding m-0 p-0 justify-content-center">
			<div id="pic" class="col-md-4 p-0 ">
				<img src="<?php echo get_template_directory_uri(); ?>/img/comit2.jpg" alt="高性能な家" class="img-fluid w-100px text-center">
			</div>
			<div id="info" class="col-md-6 text-lg-left">
				<h3 class="mb-1.5 ">高性能</h3>
				<p>断熱・気密・換気・耐久性すべてにおいて高性能を発揮する独自の技術により、隙間なく頑丈につくられた高性能で快適な家を実現</p>
			</div>
		</div>
		<hr>
		<div class="row padding m-0 p-0 justify-content-center">
			<div id="pic" class="col-md-4 p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/comit3.jpg" alt="高いコストパフォーマンス" class="img-fluid w-100px text-center">
			</div>
			<div id="infolast" class="col-md-6 text-lg-left">
				<h3 class="mb-1.5">高いコストパフォーマンス</h3>
				<p>完全自由設計なのに、1000万円台からお家を建てることができます。プラスして30年間の補償付きのため、安心して住んでいただけます。</p>
				<br>
			</div>
		</div>
	</div>
</section>



<section id="access" class="bg-white m-md-5 p-md-5 text-center">
	<div class="row welcome text-center">
		<div class="col-12 py-3">
			<h1>Access</h1>
		</div>
		<hr>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h4 class="py-3">Incoron</h4> 

			<p>住所：愛知県名古屋市</p>
			<p>電話番号：090-999-9999</P>
			<p>定休日：月曜</P>
			<p>【営業時間】</p>
			<p>11:30～18:00</P>

		</div>
		<div class="col-md-8 d-md-"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4265663082974!2d136.879348215276!3d35.1709193653964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x888e6049a94311f3!2z5ZCN5Y-k5bGL44Oe44Oq44Kq44OD44OI44Ki44K944K344Ki44Ob44OG44Or!5e0!3m2!1sja!2sjp!4v1588037952651!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
	</div>
</section>

<!--- Footer -->
<footer>
<div class="container-fluid padding-0">
<div class="row text-center">
	<div class="col-12">
		<hr class="light">
		<h5>&copy; funny.com</h5>
	</div>
</div>
</div>
</footer>






</body>
</html>









<!--- Check out my course on Udemy! -->
<!-- <div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="http://bit.ly/advanced-bootstrap-course" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="https://www.w3newbie.com/wp-content/uploads/nuno-udemy-banner.png" style="max-width: 100%; min-width: 100%;"></a>
</div> -->


