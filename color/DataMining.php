<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Android分析工具</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- icons -->
		<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap Core CSS file -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/styles.css">

		<!-- Conditional comment containing JS files for IE6 - 8 -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5.js"></script>
			<script src="assets/js/respond.min.js"></script>
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

		<!-- Navigation -->
	    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<div class="container-fluid">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Sitename"></a>
				</div>
				<!-- /.navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../works/works.php">Ｗorks</a></li>
						<li><a href="../uploadbasic/angularjs.php">App check</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- /.navbar -->

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

					<!-- Page breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">其他卡片</a></li>
						<li class="active">分析工具卡片延伸</li>
					</ol>

					<!-- Page Heading -->
					<h1>Paper整理</h1>
					<hr>

					<!-- Heading levels -->
					<h1>INFORMATION SECURITY IN BIG DATA:PRIVACY AND DATA MINING</h1>
					<hr>
					<!-- Paragraphs -->
					<h3>Paper資訊</h3>
                     <ul class="lead" type="circle">
        <li>來源：<a href="http://ieeexplore.ieee.org/document/6919256/">IEEE</a></li>   <li>Authors：LEI XU, CHUNXIAO JIANG, (Member, IEEE), JIAN WANG, (Member, IEEE),
JIAN YUAN, (Member, IEEE), AND YONG REN, (Member, IEEE)
</li>
                         <li>發表年分日期：Received September 21, 2014, accepted October 4, 2014, date of publication October 9, 2014, date of current version October 20, 2014.</li>

                    </ul>
        <hr>
                    <h3>摘要</h3>
                     <ul class="lead" type="circle">
                         <li><code>Data Mining</code>技術的發展與普及，逐漸對個人敏感信息的安全性構成嚴重威脅，<code>PPDM(privacy preserving data mining)</code>之研究也隨之興起</li>
                         <li>在此paper中，以廣泛的角度看待與Data Mining有關的隱私問題，並研究可以幫助保護敏感信息的各種方法</li>
                         <li>討論涉及Data Mining之四類用戶所產生的隱私問題與如何保護敏感信息</li>
                         <li><code>游戲理論</code>，用於分析Data Mining中不同用戶之間的交互作用</li>
                         <li>區分不同用戶對敏感信息安全性的責任，對PPDM的研究提供一些有用的見解</li>

                    </ul>
        <hr>
        <h3>二	介紹</h3>
                     <ul class="lead" type="circle">
        <li>KDD (KNOWLEDGE DISCOVERED BY DATA)</li>
                <ol type="1.">
                <li>資料前處理(Data Preprocessing)</li>
                <ol type="A">
                    <li>Data selection(篩選), Data cleaning(EX:刪除極端值、空值), Data integration(整合)</li>
                </ol>
                    <li>資料轉換Data Transformation</li>
                <ol type="A">
                    <li>Feature selection, Feature transformation</li>
                </ol>

                    <li>資料探勘Data mining</li>
                <ol type="A">
                    <li>Extract data patterns (clusters分群, classifications分類 etc.)</li>
                </ol>
                     <li>評估與呈現Pattern evaluation and presenting</li>
                <ol type="A">
                    <li>Identify truly interesting patterns.</li>
                </ol>
                    <br>
                    <img src="http://ieeexplore.ieee.org/mediastore/IEEE/content/media/6287639/6705689/6919256/jiang1-2362522-hires.gif"  border="1">
                <br>
             </ol>
                         <li>PPDM</li>

                         <ol type="1.">
                             <li>為一種保護隱私的資料探勘機制。在Data mining（資料探勘）過程中，希望可以從資料資料中找出有用的資訊和知識，卻有可能因此而侵犯到一些隱私資訊。</li>

                             <li>希望透過保護隱私的資料探勘</li>

                <ol type="A">
                    <li>在不侵犯隱私的前提下，對資料做有用的分析。</li>
                    <li>隱私疑慮案例：寄嬰兒衣服的coupon給一位父親的女兒，父親起初很疑惑，後來才得知女兒懷孕了。</li>
                    <li>模糊精確度：身⾼體重四捨五入</li>
                    <li>資料隨機化：將年齡randomize</li>
                             </ol>
                         </ol>
            <li>四類Users</li>
                          <ol type="1.">
                <li>Data Provider：擁有Data的人，任何人都可以是Data Provider</li>
                <ol type="A">
                    <li>想要確保自己的隱私不會外洩</li>
                </ol>
                    <li>Data Collector：從Data Provider蒐集資料並把Data給Data Miner</li>
                <ol type="A">
                    <li>把敏感資料做修改後仍然保有它的意義，如前面提到的模糊精確度等</li>
                </ol>

                    <li>Data Miner：做Data Mining的人</li>
                <ol type="A">
                    <li>保護Mining結果之敏感資訊</li>
                </ol>
                     <li>Decision Maker：⽤Data Mining的結果做決策。</li>
                <ol type="A">
                    <li>如何做決策</li>
                </ol>
                    <br>
                         </ol>
                    <img src="http://ieeexplore.ieee.org/mediastore/IEEE/content/media/6287639/6705689/6919256/jiang2-2362522-hires.gif"  border="1">
                <br>

        <hr>

				<?php

				$filename = 'book2_recommendation.php';
				if (file_exists($filename)) {
				    echo "<b>最後更新時間：</b>" . date ("F d Y H:i:s.", filemtime($filename));
				}
				?>



					<!-- Responsive images -->
<!--
					<h1>APKtool</h1>
					<p><img class="img-responsive" src="apktool/2.jpg" alt=""></p>
					<div class="row">
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/1.jpg" alt=""></div>
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/3.jpg" alt=""></div>
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/4.jpg" alt=""></div>
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/5.jpg" alt=""></div>
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/6.jpg" alt=""></div>
						<div class="col-sm-2"><img class="thumbnail img-responsive" src="apktool/7.jpg" alt=""></div>
					</div>
					<hr>
-->

					<!-- Lists -->
					<hr>
					<h1>PPT解說</h1>
					<iframe src="https://www.slideshare.net/slideshow/embed_code/key/MOcANgmxOHLziP" width="1200" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>


					<a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=140.115.80.240&digit=style/plain/10/&reloads=1" alt="" title="" border="0"></a><br /><a href="http://" target="_blank" style="font-family: Geneva, Arial,  Microsoft JhengHei; font-size: 7px; color: #330010; text-decoration: none;"></a><h4><strong>瀏覽人數</strong></h4>

					<!-- Forms -->
					<h3>加入討論</h3>
					<div class="well">
						<form>
							<div class="form-group">
								<label for="contactName">Name</label>
								<input type="text" class="form-control" id="contactName" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="contactAddress">你的想法</label>
								<input type="text" class="form-control" id="contactAddress" placeholder="Enter address">
							</div>
							<div class="form-group">
								<label for="contactEmail">Email</label>
								<input type="email" class="form-control" id="contactEmail" placeholder="Enter email">
								<p class="help-block">Make sure you use a valid email address</p>
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<hr>

					<!-- Pager -->

					<nav>
						<ul class="pager">
							<li class="previous"><a href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>上一張卡片</a></li>
							<li class="next"><a href="#">下一張卡片 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
						</ul>
					</nav>
					<hr>

				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->

		<!-- JQuery scripts -->
	    <script src="assets/js/jquery-1.11.2.min.js"></script>

		<!-- Bootstrap Core scripts -->
		<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
