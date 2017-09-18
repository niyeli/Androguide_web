<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Androguide</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/LOGO10.png" alt="" /></span><span class="title">improve your knowledge</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="#">Works</a></li>
                            <li><a href="../uploadbasic/angularjs.php">App check</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Works<br />資安相關知識介紹</h1>
								<h3><p>本網站可以預防您安裝apk的風險，增進您資安的知識。</p></h3>

							</header>



							<h2>最近更新</h2>
							<section class="tiles">
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="../color/book2_recommendation.php">
										<h2>Android 安全架構深究</h2>
										<div class="content">
											<p>Android Security Internals<br>
												<?php
												$fileroute = '../color/book2_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo  $fliedate;
												}
												?></p>
										</div>
									</a>
								</article>

								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="../color/book1_recommendation.php">
										<h2>駭客攻防聖經</h2>
										<div class="content">
											<p>Android Hacker's Handbook <br>
												<?php
												$fileroute = '../color/book1_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo  $fliedate;
												}
												?>
											</p>
										</div>
									</a>
								</article>

								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="../color/web_recommendation.php">
										<h2>網站資源</h2>
										<div class="content">
											<p>學習資安的推薦網站，從初學者到高階 <br>
												<?php
												$fileroute = '../color/web_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo  $fliedate;
												}
												?>
											</p>
										</div>
									</a>
								</article>

							</section>
							<br /><br /><hr>



              <h2>資源推薦</h2>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="../color/web_recommendation.php">
										<h2>網站資源</h2>
										<div class="content">
											<p>學習資安的推薦網站，從初學者到高階 <br>
												<?php
												$filename = '網站資源';
												$fileroute = '../color/web_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
												    echo  $fliedate;
												}
												$my_array = array( array($fliedate,$filename,$fileroute ));
												?>
											</p>
										</div>
									</a>
								</article>

                                <article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="../color/DataMining.php">
										<h2>教學資源</h2>
										<div class="content">
											<p>PRIVACY AND DATA MINING(上)<br>
												<?php
												$filename = '教學資源';
												$fileroute = '../article/DataMining.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
												    echo  $fliedate;
												}
												array_push($my_array , array($fliedate, $filename,$fileroute));
												?></p>
										</div>
									</a>
								</article>

                                <article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="../color/book1_recommendation.php">
										<h2>駭客攻防聖經</h2>
										<div class="content">
											<p>Android Hacker's Handbook <br>
												<?php
												$filename = '駭客攻防聖經';
												$fileroute = '../color/book1_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo  $fliedate;
												}
												array_push($my_array , array($fliedate, $filename,$fileroute));

												?>
											</p>
										</div>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="../color/paper_recommendation.php">
										<h2>Paper導覽</h2>
										<div class="content">
											<p> <br>
												<?php
												$filename = 'Paper導覽';
												$fileroute = '../color/paper_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo $fliedate;
												}
												array_push($my_array , array($fliedate, $filename,$fileroute));
												?></p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="../color/analysis_tool.php">
										<h2>Android分析工具的介紹</h2>
										<div class="content">
											<p>Androguard APKtool Taintdroid<br>
												<?php
												$filename = 'Android分析工具的介紹';
												$fileroute = '../article/analysis_tool.html';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
												    echo  $fliedate;
												}
												array_push($my_array , array($fliedate, $filename,$fileroute));
												?></p></p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="../color/book2_recommendation.php">
										<h2>Android 安全架構深究</h2>
										<div class="content">
											<p>Android Security Internals<br>
												<?php
												$filename = 'Android 安全架構深究';
												$fileroute = '../color/book2_recommendation.php';
												$fliedate = date ("<b>F d Y H:i:s.</b>", filemtime($fileroute));
												if (file_exists($fileroute)) {
														echo  $fliedate;
												}
												array_push($my_array , array($fliedate, $filename,$fileroute));
												rsort($my_array);

												?></p>
										</div>
									</a>
								</article>

                                  </section>
																	  <br /><br /><hr>


								<!-- <?php
								//印出目前排序
								for($Key=0;$Key<3;$Key++) {
									 for($Key2=0;$Key2<count($my_array[$Key]);$Key2++) {
										 echo $my_array[$Key][$Key2];
										 echo " ";
									 }
									 echo "<br>";
								 }
								 echo "<hr>";

								?> -->


<!--

														<h2>最近更新</h2>
														<section class="tiles">
															<article class="style1">
																<span class="image">
																	<img src="images/pic01.jpg" alt="" />
																</span>
																<a href="<?php echo $my_array[0][2] ;?>">


																	<h2><?php echo $my_array[0][1] ;?></h2>
																	<div class="content">
																		<p> <br>
																			<?php echo $my_array[0][0] ;?></h2>
																		</p>
																	</div>
																</a>
															</article>

															<article class="style2">
																<span class="image">
																	<img src="images/pic02.jpg" alt="" />
																</span>
																<a href="<?php echo $my_array[1][2] ;?>">


																	<h2><?php echo $my_array[1][1] ;?></h2>
																	<div class="content">
																		<p> <br>
																			<?php echo $my_array[1][0] ;?></h2>
																		</p>
																	</div>
																</a>
															</article>

																							<article class="style3">
																<span class="image">
																	<img src="images/pic03.jpg" alt="" />
																</span>
																<a href="<?php echo $my_array[2][2] ;?>">


																	<h2><?php echo $my_array[2][1] ;?></h2>
																	<div class="content">
																		<p> <br>
																			<?php echo $my_array[2][0] ;?></h2>
																		</p>
																	</div>
																</a>
															</article>

														</section>
														<br /><br /><hr> -->


                             <h2>Papers</h2>
							<section class="tiles">
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="../color/paper_recommendation.php">
										<h2>Paper導覽</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="../article/DataMining.html">
										<h2>INFORMATION SECURITY IN BIG DATA</h2>
										<div class="content">
											<p>PRIVACY AND DATA MINING(上)</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="">
										<h2>安全漏洞</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>

                                  </section>

                            <br /><br /><hr>
                            <h2>Books</h2>
                            <section class="tiles">

								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="../color/book1_recommendation.php">
										<h2>駭客攻防聖經</h2>
										<div class="content">
											<p>Android Hacker's Handbook</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="../color/book2_recommendation.php">
										<h2>Android 安全架構深究</h2>
										<div class="content">
											<p>Android Security Internals</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="">
										<h2>Malware 技術</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

								<li>All rights reserved from Androguide</a></li>

						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
