<!DOCTYPE HTML>
<!--
	Strongly Typed 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strongly Typed by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=1040" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600|Arvo:700" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?php echo site_url('js/jquery.min.js');?>"></script>
		<script src="<?php echo site_url('js/jquery.dropotron.min.js');?>"></script>
		<script src="<?php echo site_url('js/config.js');?>"></script>
		<script src="<?php echo site_url('js/skel.min.js');?>"></script>
		<script src="<?php echo site_url('js/skel-panels.min.js');?>"></script>
		<link rel="stylesheet" href="<?php echo site_url('css/skel-noscript.css');?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo site_url('css/style.css');?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo site_url('css/style-desktop.css');?>" type="text/css" />
		
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
							<h1 id="logo"><a href="#">REST IN PEACE</a></h1>
							<p>
                                Let's Respect our deads with our warm condolence.
                                <?php
                                if(isset($loginUrl))
                                {
                                ?>
                                <br />
                                <a href="<?php echo $loginUrl;?>"><img src="<?php echo site_url('images/fblogin.jpg');?>" /></a>
                                <?php 
                                }
                                //else
                                //echo $logoutUrl;
                                ?>
                            </p>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="fa fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="" class="fa fa-bar-chart-o"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="fa fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="fa fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="fa fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								</ul>
							</nav>

					</div>

			</div>