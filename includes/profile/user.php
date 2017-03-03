<style>
	.padding0{padding:0px;}

	@media (max-width: 1200px) {
		.owl-prev{position: absolute;top: 80px;left: 360px;color: #e0ded1;}
		.owl-next{position: absolute;top: 80px;left: 565px;color: #e0ded1;}
		.center .item img{height: 240px !important;overflow:hidden;}
		.nav.nav-tabs li a {	font-size:13px;}
		.center .item img{height: 240px !important;overflow:hidden;}
		.nav.nav-tabs li a {	font-size:12px;}
		.dl-horizontal dt{	width:115px;}
		.textDownPicture{width: 188px;text-align: center;font-weight: bold;color:#fff;background-color: #45a4c4;border-radius: 0px 0px 10px 10px;position: relative;top:20px;left: 48px;}
	}
	@media (min-width: 1201px) {
		.owl-prev{position: absolute;top: 80px;left: 443px;color: #e0ded1;}
		.owl-next{position: absolute;top: 80px;left: 682px;color: #e0ded1;}
		.textDownPicture{width: 228px;text-align: center;font-weight: bold;color:#fff;background-color: #45a4c4;border-radius: 0px 0px 10px 10px;position: relative;top:20px;left: 61px;}
	}
	.textDownPicture a{color:#fff;}

	/* CAROUSEL */
	#owl-demo .item{background: #42bdc2;color: #FFF;text-align: center;}
	.owl-carousel .owl-item {margin-top:15px;}
	.owl-carousel .center{margin-top:0px;}
	.center .item{height: 240px !important;overflow:hidden;}
	.item{height: 200px;overflow:hidden;transition: all 0.3s;}
	.list-inline li a{	color:#45a4c4;}

	/* MENU DOWN CAROUSEL */
	
	/* PERSONAL INFO */
	.containerInfo{border: 1px solid #45a4c4;margin-top:10px;}
	.containerInfo .personalInfo{color: #45a4c4;}
	.dl-horizontal dt{text-align: left;margin:5px 0 5px 0;color:#45a4c4;}
	.dl-horizontal dd{margin:5px 0 5px 0;padding-top:5px;}

	/* MENU INFO */
	.nav-tabs{background-color:#000;}
	.nav-tabs li a{color:#fff;}
	.nav-tabs li{	width: 50%;text-align: center;}
	.nav-tabs .active{background-color: #45a4c4;color:#fff;}
	/*.nav-tabs .active a{color:#fff !important;border:none !important;border-bottom: 1px solid #45a4c4 !important;}*/
	.nav > li > a:hover, .nav > li > a:focus {text-decoration: none;background-color: #000; border:none;}
	.bootstrap-select > .dropdown-toggle{	background-color: #000;border-color: #000;border-radius:25px;}
	.filter-option, .bs-caret .caret{	color: #45a4c4 !important;}
	.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default,.btn-default:active:hover, .btn-default.active:hover, .open > .dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .dropdown-toggle.btn-default.focus{	background-color:#000;}
	.dropdownFilter{	background-color:none;background-color: rgba(0,0,0,0.5);opacity: 1;}
	.dropdown-menu li a{	color:#fff !important;}
	.bootstrap-select.btn-group .dropdown-menu li a:hover{	background-color:#000 !important;}
	pink{	color:#45a4c4;}
	#aboutMe h2, #aboutMeMD h2{	color:#45a4c4;}


	h3.titleProfile{margin: 0px -15px;background-color: #45a4c4;padding:10px 15px;color: #fff;}
	ul.nav.nav-tabs{    margin: 0px -15px;height: 47px;}
	ul.nav.nav-tabs .active{    height: 46px;}
	div[role="tabpanel"]{	color:#949494;}
	.descripcion{	overflow:hidden;white-space:nowrap;text-overflow: ellipsis;}
	.img-responsive{	margin:0 auto;}
	span.title{	font-weight: bold;color:#45a4c4;}
	p.descripcion{	margin:0px;}
	span.price{	font-size: 18px;font-weight: bold;color: #45a4c4;}
	/*.img div{	margin:10px 0px 10px 0px;}*/
	.headActivityStream{background-color:#45a4c4;color: #fff;}
	.timeline{line-height: 50px;}

	.panel-default{	color: #333;border-color: #45a4c4;border-radius: 0px;}
	.panel-default > .panel-heading{	background-color: #45a4c4;border-radius: 0px; color:#fff;font-weight: bold;}
	.panel-default > .panel-heading i{	position: absolute;right: 35px;top: 13px;}
	.panel-body dl dt{	color: #45a4c4;}
	.panel-body dl dd{	margin-bottom:10px;color:#949494;}
	.nav-tabs > li.active > a {border:0px !important;color:#fff !important;}
	.nav-tabs > li.active{	border-left:1px solid #000;margin-left: -2px;}

	.nick-responsive{
		display:block;
		margin: 0 auto;
		background-color: #46a4c4;
		width: 100%;
		border-radius: 0px 0px 5px 5px;
		color: #fff;
		font-weight: bold;
		font-size:20px;
	}
	.list-inline li{
		margin: 5px;
		font-size:20px;
	}
	.dl-responsive dd{
		margin:0px;
	}
	.dl-responsive dt{
		width: 150px;
	}
	.col-xs-12{
		margin:5px 0px 5px 0px;
	}
	.img-profile{
		width:100%;
		height:auto;
		overflow:hidden; 
	}
	.img-profile img{
		width: 100%;
	}
</style>

<div class="container" style="padding-bottom:20px;">
	<div class="row-fluid visible-lg visible-md" style="height:300px;">
		<div id="owl-demo">
			<div class="item"><img src="http://placehold.it/220x240?text=1"></div>
			<div class="item"><img src="//placehold.it/220x240?text=2"></div>
			<div class="item"><img src="//placehold.it/220x240?text=3"></div>
			<div class="item"><img src="//placehold.it/220x240?text=4"></div>
			<div class="item"><img src="//placehold.it/220x240?text=5"></div>
		</div>
	</div>

	<!-- hidden for xs and sm for bootstrap -->
	<div class="row-fluid visible-md visible-lg" style="margin-top:-80px;color:#45a4c4;position:relative;z-index:2;">
		<div class="col-md-4 col-lg-4">
			<ul class="list-inline">
		<?php	if(!$iAm){	?>
					<li><a href=""><i class="fa fa-envelope"></i></a></li>
					<li><a href="/block/user">Block</a></li>
					<li><a href="/report/user">Report</a></li>
		<?php	}	?>
			</ul>
		</div>
		<div class="col-md-3 col-lg-4">
			<div class="textDownPicture visible-lg visible-md">
				<?php
					echo $user['nickname'];
					echo ($iAm == false) ? " <a class='favorite'><i class='fa fa-heart{$isFavorite}'></i></a>" : '';
				?>
			</div>
		</div>
		<div class="col-md-5 col-lg-4 text-right" style="font-size:20px;">
	<?php	// if(!$iAm){	?>
				<p><strong>Last Login:</strong> <?= $user['lastLogin']; ?></p>
	<?php	/* }
			echo ($user['type'] == 1) ? '<a class="btn btn-pink"><i class="fa fa-video-camera"></i> Start Cam Show</a>' : '';
			if(!$iAm){	?>
				<a class="btn btn-blue">Send Request</a>
	<?php	}*/	?>
		</div>
	</div>
	
	<!-- hidden for xs and sm in bootstrap -->
	<div class="row-fluid visible-md visible-lg" style="margin-top:80px;color:#949494;">
		<!-- Personal Info -->
		<div class="col-lg-3 col-md-3" style="border:1px solid #45a4c4">
			<h3 class="titleProfile">Personal info</h3>
			<dl class="dl-horizontal">
				<dt>Member since</dt>
				<dd><?= $user['since']; ?></dd>
				
				<dt>Age</dt>
				<dd>29</dd>
				
				<dt>Gender</dt>
				<dd>Male</dd>
				
				<dt>Body type</dt>
				<dd>Average</dd>
				
				<dt>Ethnicity</dt>
				<dd>Ethnicity</dd>
				
				<dt>Orientation</dt>
				<dd>Orientation</dd>
				
				<dt>Hair/Eyes</dt>
				<dd>Hair/Eyes</dd>
				
				<dt>Weight</dt>
				<dd>58Kg</dd>

				<dt>Height</dt>
				<dd>1.6m</dd>

				<dt>Location</dt>
				<dd>Location</dd>

				<dt>Nacionality</dt>
				<dd>Nacionality</dd>

				<dt>Occupation</dt>
				<dd>Nick</dd>

				<dt>Relationship</dt>
				<dd>Single</dd>

				<dt>Languages</dt>
				<dd>English</dd>
			</dl>
		</div>
		<div class="col-lg-9 col-md-9" style="border:1px solid #45a4c4;">
			 <!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#personalRequest" aria-controls="personalRequest" role="tab" data-toggle="tab">Personal Request <strong>(2)</strong></a></li>
				<li role="presentation"><a href="#aboutMe" aria-controls="aboutMe" role="tab" data-toggle="tab">About me</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Personal Request -->
				<div role="tabpanel" class="tab-pane active" id="personalRequest">
					<!-- <div class="row"> -->
					<div class="row-fluid img" style="margin:10px 0px">
						<div class="col-lg-6 col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">Hola que tal! <i class="fa fa-heart-o"></i></div>
								<div class="panel-body">
									<dl>
										<dt>Description</dt>
										<dd>Description asd asd asd asd asd as asd asd asd asd asd asd</dd>
										<dt>Deadline</dt>
										<dd>Deadline here.</dd>
										<dt>Budget</dt>
										<dd>Budget here.</dd>
									</dl>
									 <?= ($iAm == false) ? '<p class="text-center">
												<a class="btn btn-blue">Make a proposal</a>
											</p>' : '';	?>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">Hola que tal! <i class="fa fa-heart-o"></i></div>
								<div class="panel-body">
									<dl>
										<dt>Description</dt>
										<dd>Description asd asd asd asd asd as asd asd asd asd asd asd</dd>
										<dt>Deadline</dt>
										<dd>Deadline here.</dd>
										<dt>Budget</dt>
										<dd>Budget here.</dd>
									 <?= ($iAm == false) ? '<p class="text-center">
												<a class="btn btn-blue">Make a proposal</a>
											</p>' : '';	?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- About Me -->
				<div role="tabpanel" class="tab-pane" id="aboutMe">
					<h2>This is me</h2>
					<p>Hello guys! A little somethings about mysqlf. I was born in Thailand but Ive lived in England all my life, I go back to visit family in Thailand often and can still speak the language fluently! I am currently learning to speak Japanese, I enjoy learning new things all the time, in every aspcet of life!</p>
					
					<h2>My kinks/fetishes</h2>
					<p style="font-size:18px;"><pink>A finger in the ass and dick in the pussy(Receiving) - ass play(Everything to do with it) -ass worship(Everything to do with it) -Butt plugs(Everithing to do with it) -cock milkink(Giving) -hot oil massages(Receiving) -lesbian domination(Giving) - rimming(Everything to do with it) -teasing(Receiving).</pink></p>
				</div>

				
			</div>
		</div>
	</div>


	<!-- hidden for md and lg in bootstrap -->
	<div class="row-fluid visible-sm visible-xs">
		<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
			<div class="img-responsive">
				<div class="img-profile">
					<img src="http://placehold.it/330x300?text=Picture" class="img-responsive">
				</div>
				<span class="nick-responsive">
					<?php
						echo $user['nickname'];
						echo ($iAm == false) ? " <a class='favorite'><i class='fa fa-heart{$isFavorite}'></i></a>" : '';
					?>
				</span>
			</div>
		</div>
	</div>
	<div class="row-fluid visible-sm visible-xs">
		<div class="col-xs-12 col-sm-6 text-center">
			<ul class="list-inline">
		<?php	if(!$iAm){	?>
					<li><a href=""><i class="fa fa-envelope"></i></a></li>
					<li><a href="/block/user">Block</a></li>
					<li><a href="/report/user">Report</a></li>
		<?php	}	?>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6 text-center" style="color:#45a4c4;font-size:20px;">
			<p><strong>Last Login:</strong> <?= $user['lastLogin']; ?></p>
		</div>
	</div>
	<div class="row-fluid visible-sm visible-xs">
		<div class="col-xs-12 col-sm-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<!-- Personal Info -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Personal Info
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="row-fluid">
								<dl class="dl-horizontal dl-responsive">
									<div class="col-sm-6">
										<dt>Member since</dt>
										<dd><?= $user['since']; ?></dd>
										
										<dt>Age</dt>
										<dd>29</dd>
										
										<dt>Gender</dt>
										<dd>Male</dd>
										
										<dt>Body type</dt>
										<dd>Average</dd>
										
										<dt>Ethnicity</dt>
										<dd>Ethnicity</dd>
										
										<dt>Orientation</dt>
										<dd>Orientation</dd>

										<dt>Hair/Eyes</dt>
										<dd>Hair/Eyes</dd>
										
										<dt>Weight</dt>
										<dd>58Kg</dd>
									</div>
									<div class="col-sm-6">
										<dt>Height</dt>
										<dd>1.6m</dd>

										<dt>Location</dt>
										<dd>Location</dd>

										<dt>Nacionality</dt>
										<dd>Nacionality</dd>

										<dt>Ocuppation</dt>
										<dd>Nick</dd>

										<dt>Relationship</dt>
										<dd>Single</dd>

										<dt>Languages</dt>
										<dd>English</dd>
									</div>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal info -->

				<!-- Personal Request -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Personal Request <strong>(2)</strong>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<!-- <div class="row"> -->
							<div class="row-fluid img" style="margin:10px 0px">
								<div class="col-xs-12 col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Hola que tal! <i class="fa fa-heart-o"></i></div>
										<div class="panel-body">
											<dl>
												<dt>Description</dt>
												<dd>Description asd asd asd asd asd as asd asd asd asd asd asd</dd>
												<dt>Deadline</dt>
												<dd>Deadline here.</dd>
												<dt>Budget</dt>
												<dd>Budget here.</dd>
											</dl>
											<?= ($iAm == false) ? '<p class="text-center">
												<a class="btn btn-blue">Make a proposal</a>
											</p>' : '';	?>
										</div>
									</div>
								</div>
								
								<div class="col-xs-12 col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Hola que tal! <i class="fa fa-heart-o"></i></div>
										<div class="panel-body">
											<dl>
												<dt>Description</dt>
												<dd>Description asd asd asd asd asd as asd asd asd asd asd asd</dd>
												<dt>Deadline</dt>
												<dd>Deadline here.</dd>
												<dt>Budget</dt>
												<dd>Budget here.</dd>
											</dl>
											<?= ($iAm == false) ? '<p class="text-center">
												<a class="btn btn-blue">Make a proposal</a>
											</p>' : '';	?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Request -->

				<!-- About Me -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								About me
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<h2>This is me</h2>
							<p>Hello guys! A little somethings about mysqlf. I was born in Thailand but Ive lived in England all my life, I go back to visit family in Thailand often and can still speak the language fluently! I am currently learning to speak Japanese, I enjoy learning new things all the time, in every aspcet of life!</p>
							
							<h2>My kinks/fetishes</h2>
							<p style="font-size:18px;"><pink>A finger in the ass and dick in the pussy(Receiving) - ass play(Everything to do with it) -ass worship(Everything to do with it) -Butt plugs(Everithing to do with it) -cock milkink(Giving) -hot oil massages(Receiving) -lesbian domination(Giving) - rimming(Everything to do with it) -teasing(Receiving).</pink></p>
						</div>
					</div>
				</div>
				<!-- /About Me -->
			</div>
		</div>
	</div>
</div>


<script>
	var owl = $("#owl-demo");
	owl.owlCarousel({
		center: true,
		loop: true,
		items: 5,
		nav: true,
		navText: ['<i class="fa fa-caret-left fa-3x"></i>', '<i class="fa fa-caret-right fa-3x"></i>']
	});
	$('.selectpicker').selectpicker();

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		if(e.currentTarget['hash'] == "#camSchedule"){
			loadCalendar();
		}
	})

	function loadCalendar(){
		$('.calendar').fullCalendar({
			header: {
				left: 'title',
				center: '',
				right: ''
			},
			defaultDate: '2016-09-28',
			events: [
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-09-01'
				},
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-09-05'
				},
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-09-10'
				}
			]
		});
	}
</script>