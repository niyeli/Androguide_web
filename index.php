
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Androguide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<?php

		// header('Content-type: text/html; charset=utf-8');    //編碼
		//
		// global $_DB;
		// $_DB['host'] = "localhost";                 //填入host資料, 本機為localhost
		// $_DB['username'] = "root";                //username
		// $_DB['password'] = "rootroot1234";      //password
		// $_DB['dbname'] = "web";                //資料庫名稱
		//
		// //使用 mysql_connect () 連結database , 參數帶入上面填好的資料
		// //$link = mysqli_connect('140.115.80.240', 'root', 'rootroot1234', 'web');
		// $conn = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
		// //$link = mysql_pconnect($_DB['host'],$_DB['username'],$_DB['password']);
		// //
		// // //選擇資料庫
		//  mysql_select_db($_DB['dbname']);
		// //
		// $sql = "SELECT id FROM web.article"; //在test資料表中選擇所有欄位

		//$result = mysql_query($sql) ;
		//$show=mysql_fetch_row($result) or die(mysql_error()) ;
		//print_r($show);

		//echo $result;
	 	//while($row = mysql_fetch_array($result)){//印出資料
		//	 echo $row;
	 	//}
		?>
  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!--
	Default Theme Style
	You can change the style.css (default color purple) to one of these styles

	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
	<link rel="stylesheet" href="css/style.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<!-- End demo purposes only -->

<!--
	<style>
	/* For demo purpose only */

	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: block;
		margin-bottom: 5px!important;
		float: left;
		width: 100%;
	}
	#colour-variations li a {
		width: 100%;
		position: relative;
		display: block;
		overflow: hidden;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		-ms-border-radius: 4px;
		border-radius: 4px;
		-webkit-transition: 0.4s;
		-o-transition: 0.4s;
		transition: 0.4s;
	}
	#colour-variations li a:hover {
	  	opacity: .9;
	}
	#colour-variations li a > span {
		width: 33.33%;
		height: 20px;
		float: left;
		display: -moz-inline-stack;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}


	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #f64662;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	</style> -->
	<!-- End demo purposes only -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-104779247-1', 'auto');
		ga('send', 'pageview');

	  </script>
	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index.php">Androguide</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="index.php" data-nav-section="home"><span>Home</span></a></li>
		            <li><a href="work.html" data-nav-section="work"><span>Works</span></a></li>
		            <li><a href="uploadbasic/angularjs.html" data-nav-section="App check"><span>App check</span></a></li>
                      <li><a href="#" data-nav-section="About"><span>About</span></a></li>

		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
                            <img class="to-animate" src="images/LOGO13.png" width="300px" height="auto" >
							<h1 class="to-animate">Androguide</h1>
							<h2 class="to-animate">Improve your information security.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-bulb"></i>
						<h2>Plan</h2>
						<p>中央大學四年級專題第20組計畫打造一個幫助分析手機軟體病毒的網站</p>
						<!--<p><a href="#" class="btn btn-primary">Get In Touch</a></p>-->
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-wrench"></i>
						<h2>Develop</h2>
						<p>透過機器學習與論文閱讀等過程，我們逐漸開發出這樣的病毒分析工具</p>
						<!--<p><a href="#" class="btn btn-primary">Click Me</a></p>-->
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-rocket"></i>
						<h2>Launch</h2>
						<p>上傳你的手機apk供我們檢測吧！</p>
						<!--<p><a href="#" class="btn btn-primary">Why Us?</a></p>-->
					</div>
				</div>
			</div>
			<div class="row watch-video text-center to-animate">
				<span>Let's go AppChecking!</span>

				<a href="uploadbasic/angularjs.html"><img src="images/start.PNG"></a>
			</div>
		</div>
	</section>

	<section id="fh5co-work" data-section="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Work</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>整理與推薦的資源</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="color/book2_recommendation.php"  target="_blank" class="fh5co-project-item to-animate">
						<img src="images/work_2.png" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>書籍導讀─Android 安全架構深究</h2>
						<span><?php

						$filename = 'color/book2_recommendation.php';
						if (file_exists($filename)) {
								echo date ("<b>F d Y</b>", filemtime($filename));
						}
						?></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="color/book1_recommendation.php" target="_blank" class="fh5co-project-item to-animate">
						<img src="images/work_2.png" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>書籍導讀─駭客攻防聖經</h2>
						<span>
							<?php

							$filename = 'color/book1_recommendation.php';
							if (file_exists($filename)) {
							    echo date ("<b>F d Y</b>", filemtime($filename));
							}
							?>

						</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="color/web_recommendation.php"  target="_blank" class="fh5co-project-item to-animate">
						<img src="images/work_1.png" alt="" class="img-responsive">
						<div class="fh5co-text">
						<h2>資源推薦─資安相關網站推薦</h2>
						<span><?php

						$filename = 'color/web_recommendation.php';
						if (file_exists($filename)) {
								echo date ("<b>F d Y</b>", filemtime($filename));
						}
						?></span>
						</div>
					</a>

				</div>


				<div class="clearfix visible-sm-block"></div>



                <h3 class="to-animate"  style="text-align:center;" ><a href="works/works.php">了解更多</a></h3>

				<div class="clearfix visible-sm-block"></div>


			</div>
			<div class="row">
				<div class="col-md-12 text-center to-animate">
					<!-- <p>* Demo images from <a href="http://plmd.me/" target="_blank">plmd.me</a></p>-->
				</div>
			</div>
		</div>
	</section>

	 <section id="fh5co-testimonials" data-section="App check">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">APP CHECK</h2>
                     <a href="uploadbasic/angularjs.html"><h3 class=" left-border to-animate">點我前往檢測</h3></a>
				</div>
			</div>
		</div>
	</section>


	<section id="fh5co-services" data-section="About">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<h2 class=" left-border to-animate">網站介紹</h2>
                    <h3>我們究竟提供什麼資源與服務呢？</h3>
					<div class="row">
						<div class="col-md-8 subtext to-animate">

						</div>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12 section-heading text-left">
                    <div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-shield"></i>
					<h3>功能說明</h3>
					<p>將尚未安裝的手機軟體APK檔上傳到我們的網頁，不到一分鐘的時間，就能判定此軟體是否可以放心安裝</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-layers2"></i>
					<h3>系統簡介</h3>
					<p>一個擁有檢測apk是否藏有病毒的偵測工具，透過使用者上傳apk檔提供我們做檢測，避免讓手機中毒的風險</p>
				</div>

				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-diamond"></i>
					<h3>平台價值</h3>
					<p>透過免費提供一個專業的平台檢測APK是否藏有病毒，也打造一個資安知識的整理懶人包，更提供由初學者到高階不同程度的資安資源的分類，不論是任何想透過此網站接觸資安訊息的使用者都可以輕鬆取得相對的資訊</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-monitor"></i>
					<h3>使用技術</h3>
					<p>將開發應用：機器學習（Find Datasets AndTraining Model ）/ Feature Extraction / python 3 開發工具： Androguard 網站：PHP MYSQL HTML Apache 版本控管：Github
</p>
				</div>
                </div>



			</div>

		</div>
	</section>
	<!--
	<section id="fh5co-about" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">About</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/person1.jpg" alt="Image"></figure>
						<h3>Jean Smith</h3>
						<span class="fh5co-position">Web Designer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/person2.jpg" alt="Image"></figure>
						<h3>Rob Smith</h3>
						<span class="fh5co-position">Web Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/person3.jpg" alt="Image"></figure>
						<h3>Larry Ben</h3>
						<span class="fh5co-position">Web Designer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-counters" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Fun Facts</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-briefcase to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="89" data-speed="5000" data-refresh-interval="50">89</span>
						<span class="fh5co-counter-label">Finished projects</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-code to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="2343409" data-speed="5000" data-refresh-interval="50">2343409</span>
						<span class="fh5co-counter-label">Line of codes</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-cup to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="1302" data-speed="5000" data-refresh-interval="50">1302</span>
						<span class="fh5co-counter-label">Cup of coffees</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-people to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="52" data-speed="5000" data-refresh-interval="50">52</span>
						<span class="fh5co-counter-label">Happy clients</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Get In Touch</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
						</li>
						<li><i class="icon-phone"></i> (123) 465-6789</li>
						<li><i class="icon-envelope"></i>info@freehtml5.co</li>
						<li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></li>
					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<h3>Contact Form</h3>
					<div class="form-group ">
						<label for="name" class="sr-only">Name</label>
						<input id="name" class="form-control" placeholder="Name" type="text">
					</div>
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="email" class="form-control" placeholder="Email" type="email">
					</div>
					<div class="form-group ">
						<label for="phone" class="sr-only">Phone</label>
						<input id="phone" class="form-control" placeholder="Phone" type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="Send Message" type="submit">
					</div>
					</div>
				</div>

			</div>
		</div>
		<div id="map" class="to-animate"></div>
	</section>
	-->


	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; Androguide All Rights Reserved.</p>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- For demo purposes Only ( You may delete this anytime :-) -->
	<!--
	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Preset Colors</h3>
		<ul>
			<li>
				<a href="javascript: void(0);" data-theme="style">
					<span style="background: #3f95ea;"></span>
					<span style="background: #52d3aa;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style2">
					<span style="background: #329998;"></span>
					<span style="background: #6cc99c;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style3">
					<span style="background: #9f466e;"></span>
					<span style="background: #c24d67;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style4">
					<span style="background: #21825C;"></span>
					<span style="background: #A4D792;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>

		</ul>
	</div>
	-->
	<!-- End demo purposes only -->


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
