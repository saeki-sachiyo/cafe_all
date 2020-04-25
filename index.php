<!DOCTYPE html>

<!-- これをjaに変更するとどうなるのか
…特に変化はなかった -->
<html lang="ja">
<head>

	<!-- UTF-8もなくても影響なかった -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>funny.com</title>
	<!-- Bootstrap4の公式と比較するとjQueryのところだけ違いあったが、
	公式版のものに変更しても動作に影響はなかった 
	更に、srcのintegretyは意味がわからない
	-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<style>
body {
background-image: url("<?php echo get_template_directory_uri(); ?>/img/mac.png");
background-attachment: fixed;
background-size: cover;
  background-position: center center;

}
</style>

</head>



<body>


<!-- Navigation -->

<!-- スペースで複数クラスを付与するmdは、スマホサイズから大きくなった場合の指定 bg-lightはナビの色指定
stiky-topはナビを上に固定
・・・上に固定ってどういう意味？-->

<!-- これがナビバーの基本形：詳しくは公式参照 -->
<!-- https://getbootstrap.com/docs/4.3/components/navbar/ -->
<!-- 
navbar-expand-md：mdよりも広くなった場合にナビバーが出現
navbar-light bg-lightは背景白で、文字色グレー
sticky-topが有効ではない：ブラウザのせい？
fixed-topにすると確実に上部に固定だが、Floatになり画像とかぶるのが問題
-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

<!-- 
container-fluid： グリッドシステム使う時の基本形：このクラス以下の要素がいい感じに分割される
navbar-brand：特に必要な感じじゃないが
class="navbar-toggler：
data-targetで指定したIDの要素を消したり出したりする、同じIDであれば同時に開閉する
navbar-toggler-icon：ただのアイコン
collapse:非表示
navbar-collapse：Navbarのコンテンツ部分を.navbar-expand-xxと連携して非表示にする
https://homupedia.com/bootstrap4-navbar.html
ml-auto:margin lightの略：これはいいが、なぜナビバーボタンが右寄りなのかが解せない
class：activeは複数あるものを選択状態にしたい場合に使う

-->
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img class="funny" src="<?php echo get_template_directory_uri(); ?>/img/funnylogo.png" alt=""></a>
	<!-- <a class="navbar-brand" href="#"><i class="fab fa-accusoft"></i></a> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item  active">
				<a class="nav-link"  href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#service">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#team">Team</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#connect">Connect</a>
			</li>


		</ul>


	</div>



</div>
</nav>


<!--- Image Slider -->

<!-- 
data-ride="carousel：これの記述によって、読み込み順にスライドが開始される	
 -->
<div id="slides" class="carousel slide" data-ride="carousel">

<!-- 
おそらくjQueryの記述だと思う 
data-target：同じページで複数のスライダーが存在する場合、この記述が必要
また、どれかをclass：activeにしないとスライダーが表示されない
-->
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="<?php echo get_template_directory_uri(); ?>/img/back5.jpg" alt="">
		<div class="carousel-caption">
			<h1 class="display-2">funny.com</h1>
			<h3 class="display-2">We are borderless engineers</h3>
			<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
			<button type="button" class="btn btn-primary btn-lg">Get Started</button>
		</div>
	</div>
	<div class="carousel-item">
		<img src="<?php echo get_template_directory_uri(); ?>/img/back6.jpg" alt="">
	</div>
	<div class="carousel-item">
		<img src="<?php echo get_template_directory_uri(); ?>/img/back3.jpg" alt="">
	</div>
</div>
</div>

<!--- Jumbotron -->
<!-- https://tonari-it.com/bootstrap-jumbotron/ 
h1,pタグをいい感じに調整してくれるやつ-->
<div id="about" class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xm-10">
		<p class="lead">This is a pen This is a pen This is a pen This is a pen This is a pen This is a pen This is a pen This is a pen </p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xm-2">
		<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
	</div>

</div>
</div>

<!--- Welcome Section -->
<div id="service" class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Built with ease.</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">This is a pen This is a pen This is a pen This is a pen This is a pen This is a pen</p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-code"></i>
		<h3>HTML5</h3>
		<p>Built with the latest version of HTML, HTML5.</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bold"></i>
		<h3>BOOTSTRAP</h3>
		<p>Built with the latest version of Bootstrap, Bootstrap 4.</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<i class="fab fa-css3"></i>
		<h3>CSS3</h3>
		<p>Built with the latest version of CSS, CSS3.</p>
	</div>
<div>
	<hr class="my-4">
</div>

</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-12 col-lg-6">
		<h2>If you build it...</h2>
		<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
		<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
		<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
		<br>
		<a href="#" class="btn btn-primary">Learn More</a>
	</div>
	<div class="col-lg-6">
		<img src="<?php echo get_template_directory_uri(); ?>/img/desk.jpg" class="img-fluid">
	</div>
</div>
</div>

<hr class="my-4">

<!--- Fixed background -->
<figure>
	<!-- これは、指定の画像なのか？またはBootstrapで準備された画像なのか？ -->
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun	
</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-sm-6 col-md-3">
		<img class="gif" src="<?php echo get_template_directory_uri(); ?>/img/1.gif">
	</div>
	<div class="col-sm-6 col-md-3">
			<img class="gif" src="<?php echo get_template_directory_uri(); ?>/img/2.gif">
	</div>
	<div class="col-sm-6 col-md-3">
			<img class="gif" src="<?php echo get_template_directory_uri(); ?>/img/3.gif">
	</div>
	<div class="col-sm-6 col-md-3">
			<img class="gif" src="<?php echo get_template_directory_uri(); ?>/img/4.gif">
	</div>

</div>
</div>
</div>


<!--- Meet the team -->
<div id="team" class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Meet the Team</h1>
	</div>
	<hr>
</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/team4.jpg">
			<div class="card-body">
				<h4 class="card-title">John Doe</h4>
				<p class="card-text">John is a super web designer </p>
				<a href="#" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/team2.jpg">
				<div class="card-body">
					<h4 class="card-title">Dee Jo</h4>
					<p class="card-text">Dee is an adhesive recruiter</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/team3.jpg">
					<div class="card-body">
						<h4 class="card-title">Phil Ho</h4>
						<p class="card-text">Phil is a genius engineer</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>Our Philosophy</h2>
				<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
				<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
				<p>This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple This is an apple </p>
				<br>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/back4.jpg" alt="何か間違えています" class="img-fluid">
			</div>
		</div>
		<hr class="my-4">
		</div>

<!--- Connect -->
<div id="connect" class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-google-plus-g"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>
</div>
</div>

<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-4">
		<!-- <img src="img/w3newbie.png"> -->
		<i class="fab fa-accusoft"></i>
		<hr class="light">
		<P>000-000-0000</P>
		<p>aaaaa@gmail.com</p>
		<p>300 Street Name</p>
		<p>City, State, 99999</p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5>Our hours</h5>
		<hr class="light">
		<p>Monday: 9am - 5pm</p>
		<p>Saturday: 10am - 4pm</p>
		<p>Sunday: closed</p>
	</div>
	<div class="col-md-4">
			<hr class="light">
			<h5>Our hours</h5>
			<hr class="light">
			<p>City, State, 99999</p>
			<p>City, State, 99999</p>
			<p>City, State, 99999</p>
			<p>City, State, 99999</p>
			<p>City, State, 99999</p>
	</div>
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


