<?php

//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   index.php
//  Description :   View file of Index.php
//  Last update :   19.02.2019


include "header.php";
?>



<body>

	<div class="wrapper">
		<div class="box">
			<div class="row row-offcanvas row-offcanvas">

				
				<!-- main right col -->
				<div class="column col-sm-12 col-xs-11" id="main">

					<!-- top nav -->
					<div class="navbar navbar-blue navbar-static-top">
						<div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse"
								data-target=".navbar-collapse">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="#" class="navbar-brand logo">f</a>
						</div>
						<nav class="collapse navbar-collapse" role="navigation">
							<form class="navbar-form navbar-left">
								<div class="input-group input-group-sm" style="min-width:360px;">
									<input class="form-control" placeholder="Search" name="srch-term" id="srch-term"
										type="text">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit"><i
												class="glyphicon glyphicon-search"></i></button>
									</div>
								</div>
							</form>
							<ul class="nav navbar-nav">
								<li>
									<a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
								</li>
								<li>
									<a href="#postModal" role="button" data-toggle="modal"><i
											class="glyphicon glyphicon-plus"></i> Post</a>
								</li>
								<li>
									<a href="#"><span class="badge">badge</span></a>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
											class="glyphicon glyphicon-user"></i></a>
									<ul class="dropdown-menu">
										<li><a href="">More</a></li>
										<li><a href="">More</a></li>
										<li><a href="">More</a></li>
										<li><a href="">More</a></li>
										<li><a href="">More</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<!-- /top nav -->

					<div class="padding">
						<div class="full col-sm-9">

							<!-- content -->
							<div class="row">

								<!-- main col left -->
								<div class="col-sm-5">

									<div class="panel panel-default">
										<div class="panel-thumbnail"><img src="assets/img/bg_5.jpg"
												class="img-responsive"></div>
										<div class="panel-body">
											<p class="lead">Hi there !</p>
											<p>45 Followers, 13 Posts</p>

											<p>
												<img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px"
													width="28px">
											</p>
										</div>
									</div>

								</div>

								<!-- main col right -->
								<div class="col-sm-7">

									<div class="well">
										<form class="form">
											<h4 style="text-align: center; font-size:25px;">Welcome</h4>
											<div class="input-group text-center">
											</div>
										</form>
									</div>


									

								</div>
							</div>
							<!--/row-->

							<div class="row">
								<div class="col-sm-6">
									<small class="text-muted">|</small> 
									<a href="https://github.com/SoftIcePink/cfpt_m152_portefolio">
										GitHub
									<img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" style="width:20px;"/>
								</a>
								</div>
							</div>

							<div class="row" id="footer">
								<div class="col-sm-6">

								</div>
								<div class="col-sm-6">
									<p>
										<a href="#" class="pull-right"> &copy; Copyright 2020</a>
									</p>
								</div>
							</div>

						</div><!-- /col-9 -->
					</div><!-- /padding -->
				</div>
				<!-- /main -->

			</div>
		</div>
	</div>


	<!--post modal-->
	<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#10005;</button>
					Update Status
				</div>
				<div class="modal-body">
					
				<img class="col-sm-2" src="https://edu.ge.ch/site/cfpt/wp-content/uploads/sites/112/2016/02/logo-cfpt-site.png"/>
					<form class="col-sm-10 form center-block">
						<div class="form-group ">
							<textarea class="form-control input-lg" autofocus=""
								placeholder="What do you want to share?"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<div>
						<button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
						<div class="pull-left list-inline">
							<div class="img-upload">
								<label for="file-input">
									<img src="assets/img/upload_img.png"/>
								<label>
									<input id="file-input" type="file" name="media"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/5dee5fa4a2.js" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('[data-toggle=offcanvas]').click(function () {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
		});
	</script>

	
</body>

</html>